

"use strict";

// Class definition
var KTDatatablesServerSide = function () {
    // Shared variables
    var table;
    var dt;
    var filterPayment;

    // Private functions
    var initDatatable = function () {
        dt = $("#kt_datatable_certificates").DataTable({
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [[5, 'desc']],
            stateSave: true,
            ajax: {
                url: "api/myApi/getCertificates.php",
            },
            columns: [
                { data: 'id' },
                { data: 'ipfsUrl' },
                { data: 'cid' },
                { data: 'blockdata' },
                { data: 'date' },
                { data:'status' },
            ],
            columnDefs: [
                {
                    targets: 1,
                    orderable: false,
                    render: function (data) {
                        return `
                        <a href="${data}" target="_blank" class="btn btn-secondary me-2 mb-2">VISIT IPFS</a>
                         
                            `;
                    }
                },
                {
                    targets: 5,
                    orderable: false,
                    render: function (data) {
                        return `
                           
                            <div class="badge badge-light-success">${data}</div>
                            `;
                    }
                },
                {
                    targets: 3,
                    orderable: false,
                    render: function (data) {
                        return `
                        <a href="https://explorer.celo.org/mainnet/tx/${data}" target="_blank">
                        <div class="badge badge-light">${data}</div>
                    </a>
                    

                 
                            `;
                    }
                },
               
            ],
            // Add data-filter attribute
            
        });

        table = dt.$;

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        dt.on('draw', function () {
            initToggleToolbar();
            toggleToolbars();
  
            KTMenu.createInstances();
        });
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector('[data-kt-certificates-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
      
            dt.search(e.target.value).draw();
        });
    }

    // Filter Datatable
  

    // Delete customer
    
    // Reset Filter
   

    // Init toggle toolbar
    var initToggleToolbar = function () {
        // Toggle selected action toolbar
        // Select all checkboxes
        const container = document.querySelector('#kt_datatable_certificates');
        const checkboxes = container.querySelectorAll('[type="checkbox"]');

        // Select elements
        const deleteSelected = document.querySelector('[data-kt-docs-table-select="delete_selected"]');

        // Toggle delete selected toolbar
        checkboxes.forEach(c => {
            // Checkbox on click event
            c.addEventListener('click', function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });

       
    }

    // Toggle toolbars
    var toggleToolbars = function () {
        // Define variables
        const container = document.querySelector('#kt_datatable_certificates');
        const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="base"]');
        const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected"]');
        const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count"]');

        // Select refreshed checkbox DOM elements
        const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');

        // Detect checkboxes state & count
        let checkedState = false;
        let count = 0;

        // Count checked boxes
        allCheckboxes.forEach(c => {
            if (c.checked) {
                checkedState = true;
                count++;
            }
        });

        // Toggle toolbars
        // if (checkedState) {
        //     selectedCount.innerHTML = count;
        //     toolbarBase.classList.add('d-none');
        //     toolbarSelected.classList.remove('d-none');
        // } else {
        //     toolbarBase.classList.remove('d-none');
        //     toolbarSelected.classList.add('d-none');
        // }
    }

    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            initToggleToolbar();
      
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init();
});

