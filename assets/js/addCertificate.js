"use strict";
var KTModalNewAddress = function() {
    var t, e, n, o, i, r;
    return {
        init: function() {
            (r = document.querySelector("#kt_modal_add_certificate")) && (i = new bootstrap.Modal(r), o = document.querySelector("#kt_modal_add_certificate_form"), t = document.getElementById("kt_modal_new_address_submit"), e = document.getElementById("kt_modal_new_address_cancel"), $(o.querySelector('[name="country"]')).select2().on("change", (function() {
               
            })), n = FormValidation.formValidation(o, {
                fields: {
                    certificateID: {
                        validators: {
                            notEmpty: {
                                message: "Certificate ID is required"
                            }
                        }
                    },
                    firstname: {
                        validators: {
                            notEmpty: {
                                message: "First Name  is required"
                            }
                        }
                    },
                    lastname: {
                        validators: {
                            notEmpty: {
                                message: "Last Name is required"
                            }
                        }
                    },
                    institutename: {
                        validators: {
                            notEmpty: {
                                message: "Institute Name is required"
                            }
                        }
                    },
                    grade: {
                        validators: {
                            notEmpty: {
                                message: "Grade is required"
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), t.addEventListener("click", (function(e) {
                e.preventDefault(), n && n.validate().then((function(e) {
                    console.log("validated!"), "Valid" == e ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        t.removeAttribute("data-kt-indicator"), t.disabled = !1, 
                        
                        
                        addCertificateToOffchain()

                    }), 1000000000)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })), e.addEventListener("click", (function(t) {
                t.preventDefault(), Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then((function(t) {
                    t.value ? (o.reset(), i.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTModalNewAddress.init()
}));



function addCertificateToOffchain() {
    const data = document.getElementById("certificateID").value;
    let studentData = {
        firstname: document.getElementById("firstname").value,
        lastname: document.getElementById("lastname").value,
        institutename: document.getElementById("institutename").value,
        grade: document.getElementById("grade").value
    };

    // Create a FormData object
    var formData = new FormData();

    // Append the file to formData
    var fileInput = document.getElementById('fileInput');
    if (fileInput.files[0]) {
        formData.append('file', fileInput.files[0]);
    }

    // Append the rest of the data to formData
    formData.append('data', data);
    formData.append('post', 33);
    formData.append('studentData', JSON.stringify(studentData));

    // AJAX call
    $.ajax({
        url: 'api/myApi/createCertificate.php',
        type: 'POST',
        data: formData,
        processData: false,  // Important: Don't process the files
        contentType: false,  // Important: Set content type to false
        success: function(response) {
            $("#kt_modal_add_certificate_form").find('input:text, input:password, input:file, select, textarea').val('');
            // Handle success
            Swal.fire({
                text: "You have successfully added!",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            }).then(function(e) {
                if (e.isConfirmed) {
                    window.location.reload();
                }
            });
        },
        error: function(xhr, status, error) {
            // Handle error
            console.error(error);
            // Optionally, display an error message to the user
        }
    });
}

