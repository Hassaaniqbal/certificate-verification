
<?php

if (!isset($_COOKIE['hashValue']) || !isset($_COOKIE['xPub']) || $_COOKIE['hashValue'] != '48f71ac532c4467b71f27be2f5f7fcccfc3737408e2b210508359f75f33e2dfa') {
    header('Location: index');
    exit;
}

?>
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
	<title>Certichain</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Theme mode setup on page load-->
		<script>
		var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
		</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-column flex-column-fluid">
				<!--begin::Header-->
				<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					
						<?php
                            include_once("includes/toolbar.php");
                        ?>
					
					<!--end::Container-->
					<!--begin::Container-->
					<div class="header-menu-container d-flex align-items-stretch flex-stack w-100" id="kt_header_nav">
						<!--begin::Menu wrapper-->
						<div class="header-menu container-xxl flex-column align-items-stretch flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
							<!--begin::Menu-->
							<div class="menu menu-column menu-lg-row menu-rounded menu-active-bg menu-title-gray-800 menu-state-primary menu-arrow-gray-500 fw-semibold my-5 my-lg-0 align-items-stretch flex-grow-1 px-2 px-lg-0" id="kt_header_menu" data-kt-menu="true">
								<!--begin:Menu item-->
								<div  data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
									<!--begin:Menu link-->
                                    <a href="home" class="menu-link py-3">
										<span href="home" class="menu-title">Home</span>
										<span class="menu-arrow d-lg-none"></span>
                                    </a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-0 me-lg-2">
									<!--begin:Menu link-->
									<a href="certificates" class="menu-link py-3">
										<span  class="menu-title">Certificates</span>
										<span class="menu-arrow d-lg-none"></span>
									</a>
									<!--end:Menu link-->
									
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div  data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
									<!--begin:Menu link-->
									<a href="ipfs" class="menu-link py-3">
                                    <span  class="menu-title">IPFS</span>
										<span class="menu-arrow d-lg-none"></span>
                                     </a>
									<!--end:Menu link-->
								
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
									<!--begin:Menu link-->
									<a href="blockchain" class="menu-link py-3">
										<span  class="menu-title">Blockchain</span>
										<span class="menu-arrow d-lg-none"></span>
								     </a>
									<!--end:Menu link-->
									
								</div>
								<!--end:Menu item-->
                                <!--begin:Menu item-->
									<div data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
									<!--begin:Menu link-->
									<a href="wallet" class="menu-link py-3">
										<span  class="menu-title">Wallet</span>
										<span class="menu-arrow d-lg-none"></span>
								     </a>
									<!--end:Menu link-->
									
								</div>
								<!--end:Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Menu wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid container-xxl" id="kt_wrapper">
					<!--begin::Toolbar-->
					<div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column">
							<!--begin::Title-->
							<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-3 m-0" id="walletBalance">My Balance: 0 CELO
							<!--begin::Description-->
							<span class="page-desc text-muted fs-7 fw-semibold"></span>
							<!--end::Description--></h1>
							<!--end::Title-->
						</div>
						<!--end::Page title-->
						<!--begin::Wrapper-->
						<div class="d-flex flex-align-items flex-wrap gap-3 gap-xl-0">
							<!--begin::Users group-->
							
							<!--end::Users group-->
							
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Main-->
					<div class="d-flex flex-row flex-column-fluid align-items-stretch">
						<!--begin::Content-->
						<div class="content d-flex flex-row flex-row-fluid" id="kt_content">
							<!--begin::Main-->
							<div class="d-flex flex-column flex-row-fluid">
							
								<!--begin::Post-->
								<div class="flex-column-fluid">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-6">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" data-kt-certificates-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Certificate" />
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
													
												
													
													
													<!--begin::Export-->
													<!-- <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
													<i class="ki-duotone ki-exit-up fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>Export</button> -->
													<!--end::Export-->
													<!--begin::Add user-->
													
													<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_certificate">
													<i class="ki-duotone ki-plus fs-2"></i>Add Certificate</button>
													<!--end::Add user-->
												</div>
												<!--end::Toolbar-->
												<!--begin::Group actions-->
												<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
													<div class="fw-bold me-5">
													<span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
													<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
												</div>
												<!--end::Group actions-->
											
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body py-4">
											<!--begin::Table-->
											<!--begin::Datatable-->
<table id="kt_datatable_certificates" class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
       
        <th>ID</th>
        <th>ipfsUrl</th>
        <th>CID</th>
        <!-- <th>Data</th> -->
        <th>BlockData</th>
		<th>Date</th>
		<th>Status</th>
    </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
    </tbody>
</table>
<!--end::Datatable-->
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Post-->
							</div>
							<!--end::Main-->

							<!--begin::Modal - New Address-->
							<?php
                            include_once("includes/modals/addCertificate.php");
                        ?>
		<!--end::Modal - New Address-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Main-->
					<!--begin::Footer-->
					<?php
                            include_once("includes/footer.php");
                        ?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		

		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
	
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
        <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->


		<!--end::Vendors Javascript-->



		<script src="assets/js/addCertificate.js"></script>
		<script src="assets/js/general.js"></script>
		<script src="assets/js/certificatesDatatable.js"></script>


		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>