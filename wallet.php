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
		<title>Wallet</title>
	
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
								<div data-kt-menu-placement="bottom-start" class="menu-item  menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
									<!--begin:Menu link-->
									<a href="home" class="menu-link py-3">
										<span href="home" class="menu-title">Home</span>
										<span class="menu-arrow d-lg-none"></span>
                                    </a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
									<!--begin:Menu link-->
									<a href="certificates" class="menu-link py-3">
										<span  class="menu-title">Certificates</span>
										<span class="menu-arrow d-lg-none"></span>
									</a>
									<!--end:Menu link-->
									
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
									<!--begin:Menu link-->
									<a href="ipfs" class="menu-link py-3">
                                    <span  class="menu-title">IPFS</span>
										<span class="menu-arrow d-lg-none"></span>
                                     </a>
									<!--end:Menu link-->
								
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div  data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
									<!--begin:Menu link-->
									<a href="blockchain" class="menu-link py-3">
										<span  class="menu-title">Blockchain</span>
										<span class="menu-arrow d-lg-none"></span>
								     </a>
									<!--end:Menu link-->
									
								</div>
								<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
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
							<!--begin::Actions-->
							
							<!--end::Actions-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Main-->
					<div class="d-flex flex-row flex-column-fluid align-items-stretch">
						<!--begin::Content-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Row-->
							<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
								<!--begin::Col-->
								<div class="col-xxl-8">
									<!--begin::Chart widget 26-->
									<div class="card card-flush overflow-hidden h-xl-100">
										<!--begin::Header-->
										<div class="card-header pt-7 mb-2">
											<!--begin::Title-->
											<h3 class="card-title text-gray-800 fw-bold">Transaction History</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
												<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
													<!--begin::Display range-->
													<!-- <div class="text-gray-600 fw-bold">22 Jan 2024 - 20 Feb 2024</div> -->
													<!--end::Display range-->
													<i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
													</i>
												</div>
												<!--end::Daterangepicker-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-between flex-column pt-0 pb-1 px-0">
											<!--begin::Info-->
											<div class="px-9 mb-5">
												<!--begin::Statistics-->
												<div class="d-flex align-items-center mb-2">
													<!--begin::Currency-->
													<span class="fs-4 fw-semibold text-gray-400 align-self-start me-1"></span>
													<!--end::Currency-->
													<!--begin::Value-->
													<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?php echo $_COOKIE['walletBalance']; ?> CELO</span>
													<!--end::Value-->
													<!--begin::Label-->
													<!-- <span class="badge badge-success fs-base">
													<i class="ki-duotone ki-arrow-up fs-5 text-white ms-n1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>4.5%</span> -->
													<!--end::Label-->
												</div>
												<!--end::Statistics-->
												<!--begin::Description-->
												<!-- <span class="fs-6 fw-semibold text-gray-400">Transactions in April</span> -->
												<!--end::Description-->
											</div>
											<!--end::Info-->
											<!--begin::Chart-->
											<div id="kt_charts_widget_26" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Transactions" style="height: 300px; min-height: 315px;"><div id="apexchartslmdl9cya" class="apexcharts-canvas apexchartslmdl9cya apexcharts-theme-light" style="width: 756.5px; height: 300px;"><svg id="SvgjsSvg1006" width="756.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="756.5" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect1037" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1100" class="apexcharts-yaxis" rel="0" transform="translate(29.033340454101562, 0)"><g id="SvgjsG1101" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1103" font-family="inherit" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1104">$362</tspan><title>$362</title></text><text id="SvgjsText1106" font-family="inherit" x="20" y="68.21044444444445" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1107">$357</tspan><title>$357</title></text><text id="SvgjsText1109" font-family="inherit" x="20" y="104.8208888888889" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1110">$351</tspan><title>$351</title></text><text id="SvgjsText1112" font-family="inherit" x="20" y="141.43133333333336" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1113">$346</tspan><title>$346</title></text><text id="SvgjsText1115" font-family="inherit" x="20" y="178.0417777777778" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1116">$340</tspan><title>$340</title></text><text id="SvgjsText1118" font-family="inherit" x="20" y="214.65222222222226" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1119">$335</tspan><title>$335</title></text><text id="SvgjsText1121" font-family="inherit" x="20" y="251.26266666666672" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1122">$330</tspan><title>$330</title></text></g></g><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(59.03334045410156, 30)"><defs id="SvgjsDefs1007"><clipPath id="gridRectMasklmdl9cya"><rect id="SvgjsRect1012" width="694.4666595458984" height="222.66266666666667" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklmdl9cya"></clipPath><clipPath id="nonForecastMasklmdl9cya"></clipPath><clipPath id="gridRectMarkerMasklmdl9cya"><rect id="SvgjsRect1013" width="691.4666595458984" height="223.66266666666667" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1018" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1019" stop-opacity="0.4" stop-color="rgba(0,158,247,0.4)" offset="0"></stop><stop id="SvgjsStop1020" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.8"></stop><stop id="SvgjsStop1021" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1024" class="apexcharts-grid"><g id="SvgjsG1025" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1029" x1="0" y1="36.61044444444445" x2="687.4666595458984" y2="36.61044444444445" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1030" x1="0" y1="73.2208888888889" x2="687.4666595458984" y2="73.2208888888889" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1031" x1="0" y1="109.83133333333333" x2="687.4666595458984" y2="109.83133333333333" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1032" x1="0" y1="146.4417777777778" x2="687.4666595458984" y2="146.4417777777778" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1033" x1="0" y1="183.05222222222224" x2="687.4666595458984" y2="183.05222222222224" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1034" x1="0" y1="219.6626666666667" x2="687.4666595458984" y2="219.6626666666667" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1026" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1036" x1="0" y1="219.66266666666667" x2="687.4666595458984" y2="219.66266666666667" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1035" x1="0" y1="1" x2="0" y2="219.66266666666667" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1014" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1015" class="apexcharts-series" seriesName="Transactions" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1022" d="M0 219.6626666666666L0 119.81599999999935C13.367407268948023 119.81599999999935 24.825184928046333 119.81599999999935 38.192592196994354 119.81599999999935C51.559999465942376 119.81599999999935 63.01777712504069 86.53377777777678 76.38518439398871 86.53377777777678C89.75259166293674 86.53377777777678 101.21036932203504 86.53377777777678 114.57777659098306 86.53377777777678C127.94518385993109 86.53377777777678 139.4029615190294 53.25155555555466 152.77036878797742 53.25155555555466C166.13777605692545 53.25155555555466 177.59555371602374 53.25155555555466 190.96296098497177 53.25155555555466C204.3303682539198 53.25155555555466 215.7881459130181 86.53377777777678 229.15555318196613 86.53377777777678C242.52296045091416 86.53377777777678 253.98073811001248 86.53377777777678 267.3481453789605 86.53377777777678C280.7155526479085 86.53377777777678 292.17333030700684 53.25155555555466 305.54073757595484 53.25155555555466C318.9081448449029 53.25155555555466 330.36592250400116 53.25155555555466 343.7333297729492 53.25155555555466C357.1007370418972 53.25155555555466 368.55851470099554 86.53377777777678 381.92592196994354 86.53377777777678C395.2933292388916 86.53377777777678 406.75110689798987 86.53377777777678 420.1185141669379 86.53377777777678C433.4859214358859 86.53377777777678 444.94369909498425 119.81599999999935 458.31110636393225 119.81599999999935C471.6785136328803 119.81599999999935 483.1362912919786 119.81599999999935 496.50369856092664 119.81599999999935C509.8711058298747 119.81599999999935 521.328883488973 86.53377777777678 534.696290757921 86.53377777777678C548.063698026869 86.53377777777678 559.5214756859673 86.53377777777678 572.8888829549153 86.53377777777678C586.2562902238633 86.53377777777678 597.7140678829617 53.25155555555466 611.0814751519097 53.25155555555466C624.4488824208577 53.25155555555466 635.906660079956 53.25155555555466 649.274067348904 53.25155555555466C662.641474617852 53.25155555555466 674.0992522769504 86.53377777777678 687.4666595458984 86.53377777777678C687.4666595458984 86.53377777777678 687.4666595458984 86.53377777777678 687.4666595458984 219.6626666666666M687.4666595458984 86.53377777777678C687.4666595458984 86.53377777777678 687.4666595458984 86.53377777777678 687.4666595458984 86.53377777777678 " fill="url(#SvgjsLinearGradient1018)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklmdl9cya)" pathTo="M 0 219.66266666666667 L 0 119.81599999999935C 13.367407268948023 119.81599999999935 24.825184928046333 119.81599999999935 38.192592196994354 119.81599999999935C 51.559999465942376 119.81599999999935 63.01777712504069 86.53377777777678 76.38518439398871 86.53377777777678C 89.75259166293674 86.53377777777678 101.21036932203504 86.53377777777678 114.57777659098306 86.53377777777678C 127.94518385993109 86.53377777777678 139.4029615190294 53.25155555555466 152.77036878797742 53.25155555555466C 166.13777605692545 53.25155555555466 177.59555371602374 53.25155555555466 190.96296098497177 53.25155555555466C 204.3303682539198 53.25155555555466 215.7881459130181 86.53377777777678 229.15555318196613 86.53377777777678C 242.52296045091416 86.53377777777678 253.98073811001248 86.53377777777678 267.3481453789605 86.53377777777678C 280.7155526479085 86.53377777777678 292.17333030700684 53.25155555555466 305.54073757595484 53.25155555555466C 318.9081448449029 53.25155555555466 330.36592250400116 53.25155555555466 343.7333297729492 53.25155555555466C 357.1007370418972 53.25155555555466 368.55851470099554 86.53377777777678 381.92592196994354 86.53377777777678C 395.2933292388916 86.53377777777678 406.75110689798987 86.53377777777678 420.1185141669379 86.53377777777678C 433.4859214358859 86.53377777777678 444.94369909498425 119.81599999999935 458.31110636393225 119.81599999999935C 471.6785136328803 119.81599999999935 483.1362912919786 119.81599999999935 496.50369856092664 119.81599999999935C 509.8711058298747 119.81599999999935 521.328883488973 86.53377777777678 534.696290757921 86.53377777777678C 548.063698026869 86.53377777777678 559.5214756859673 86.53377777777678 572.8888829549153 86.53377777777678C 586.2562902238633 86.53377777777678 597.7140678829617 53.25155555555466 611.0814751519097 53.25155555555466C 624.4488824208577 53.25155555555466 635.906660079956 53.25155555555466 649.274067348904 53.25155555555466C 662.641474617852 53.25155555555466 674.0992522769504 86.53377777777678 687.4666595458984 86.53377777777678C 687.4666595458984 86.53377777777678 687.4666595458984 86.53377777777678 687.4666595458984 219.66266666666667M 687.4666595458984 86.53377777777678z" pathFrom="M -1 2416.2893333333445 L -1 2416.2893333333445 L 38.192592196994354 2416.2893333333445 L 76.38518439398871 2416.2893333333445 L 114.57777659098306 2416.2893333333445 L 152.77036878797742 2416.2893333333445 L 190.96296098497177 2416.2893333333445 L 229.15555318196613 2416.2893333333445 L 267.3481453789605 2416.2893333333445 L 305.54073757595484 2416.2893333333445 L 343.7333297729492 2416.2893333333445 L 381.92592196994354 2416.2893333333445 L 420.1185141669379 2416.2893333333445 L 458.31110636393225 2416.2893333333445 L 496.50369856092664 2416.2893333333445 L 534.696290757921 2416.2893333333445 L 572.8888829549153 2416.2893333333445 L 611.0814751519097 2416.2893333333445 L 649.274067348904 2416.2893333333445 L 687.4666595458984 2416.2893333333445"></path><path id="SvgjsPath1023" d="M0 119.81599999999935C13.367407268948023 119.81599999999935 24.825184928046333 119.81599999999935 38.192592196994354 119.81599999999935C51.559999465942376 119.81599999999935 63.01777712504069 86.53377777777678 76.38518439398871 86.53377777777678C89.75259166293674 86.53377777777678 101.21036932203504 86.53377777777678 114.57777659098306 86.53377777777678C127.94518385993109 86.53377777777678 139.4029615190294 53.25155555555466 152.77036878797742 53.25155555555466C166.13777605692545 53.25155555555466 177.59555371602374 53.25155555555466 190.96296098497177 53.25155555555466C204.3303682539198 53.25155555555466 215.7881459130181 86.53377777777678 229.15555318196613 86.53377777777678C242.52296045091416 86.53377777777678 253.98073811001248 86.53377777777678 267.3481453789605 86.53377777777678C280.7155526479085 86.53377777777678 292.17333030700684 53.25155555555466 305.54073757595484 53.25155555555466C318.9081448449029 53.25155555555466 330.36592250400116 53.25155555555466 343.7333297729492 53.25155555555466C357.1007370418972 53.25155555555466 368.55851470099554 86.53377777777678 381.92592196994354 86.53377777777678C395.2933292388916 86.53377777777678 406.75110689798987 86.53377777777678 420.1185141669379 86.53377777777678C433.4859214358859 86.53377777777678 444.94369909498425 119.81599999999935 458.31110636393225 119.81599999999935C471.6785136328803 119.81599999999935 483.1362912919786 119.81599999999935 496.50369856092664 119.81599999999935C509.8711058298747 119.81599999999935 521.328883488973 86.53377777777678 534.696290757921 86.53377777777678C548.063698026869 86.53377777777678 559.5214756859673 86.53377777777678 572.8888829549153 86.53377777777678C586.2562902238633 86.53377777777678 597.7140678829617 53.25155555555466 611.0814751519097 53.25155555555466C624.4488824208577 53.25155555555466 635.906660079956 53.25155555555466 649.274067348904 53.25155555555466C662.641474617852 53.25155555555466 674.0992522769504 86.53377777777678 687.4666595458984 86.53377777777678C687.4666595458984 86.53377777777678 687.4666595458984 86.53377777777678 687.4666595458984 86.53377777777678 " fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklmdl9cya)" pathTo="M 0 119.81599999999935C 13.367407268948023 119.81599999999935 24.825184928046333 119.81599999999935 38.192592196994354 119.81599999999935C 51.559999465942376 119.81599999999935 63.01777712504069 86.53377777777678 76.38518439398871 86.53377777777678C 89.75259166293674 86.53377777777678 101.21036932203504 86.53377777777678 114.57777659098306 86.53377777777678C 127.94518385993109 86.53377777777678 139.4029615190294 53.25155555555466 152.77036878797742 53.25155555555466C 166.13777605692545 53.25155555555466 177.59555371602374 53.25155555555466 190.96296098497177 53.25155555555466C 204.3303682539198 53.25155555555466 215.7881459130181 86.53377777777678 229.15555318196613 86.53377777777678C 242.52296045091416 86.53377777777678 253.98073811001248 86.53377777777678 267.3481453789605 86.53377777777678C 280.7155526479085 86.53377777777678 292.17333030700684 53.25155555555466 305.54073757595484 53.25155555555466C 318.9081448449029 53.25155555555466 330.36592250400116 53.25155555555466 343.7333297729492 53.25155555555466C 357.1007370418972 53.25155555555466 368.55851470099554 86.53377777777678 381.92592196994354 86.53377777777678C 395.2933292388916 86.53377777777678 406.75110689798987 86.53377777777678 420.1185141669379 86.53377777777678C 433.4859214358859 86.53377777777678 444.94369909498425 119.81599999999935 458.31110636393225 119.81599999999935C 471.6785136328803 119.81599999999935 483.1362912919786 119.81599999999935 496.50369856092664 119.81599999999935C 509.8711058298747 119.81599999999935 521.328883488973 86.53377777777678 534.696290757921 86.53377777777678C 548.063698026869 86.53377777777678 559.5214756859673 86.53377777777678 572.8888829549153 86.53377777777678C 586.2562902238633 86.53377777777678 597.7140678829617 53.25155555555466 611.0814751519097 53.25155555555466C 624.4488824208577 53.25155555555466 635.906660079956 53.25155555555466 649.274067348904 53.25155555555466C 662.641474617852 53.25155555555466 674.0992522769504 86.53377777777678 687.4666595458984 86.53377777777678" pathFrom="M -1 2416.2893333333445 L -1 2416.2893333333445 L 38.192592196994354 2416.2893333333445 L 76.38518439398871 2416.2893333333445 L 114.57777659098306 2416.2893333333445 L 152.77036878797742 2416.2893333333445 L 190.96296098497177 2416.2893333333445 L 229.15555318196613 2416.2893333333445 L 267.3481453789605 2416.2893333333445 L 305.54073757595484 2416.2893333333445 L 343.7333297729492 2416.2893333333445 L 381.92592196994354 2416.2893333333445 L 420.1185141669379 2416.2893333333445 L 458.31110636393225 2416.2893333333445 L 496.50369856092664 2416.2893333333445 L 534.696290757921 2416.2893333333445 L 572.8888829549153 2416.2893333333445 L 611.0814751519097 2416.2893333333445 L 649.274067348904 2416.2893333333445 L 687.4666595458984 2416.2893333333445" fill-rule="evenodd"></path><g id="SvgjsG1016" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1126" r="0" cx="458.31110636393225" cy="119.81599999999935" class="apexcharts-marker wcjbs0e2lj no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1017" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG1027" class="apexcharts-grid-borders"><line id="SvgjsLine1028" x1="0" y1="0" x2="687.4666595458984" y2="0" stroke="#dbdfe9" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1038" x1="457.81110636393225" y1="0" x2="457.81110636393225" y2="219.66266666666667" stroke="#009ef7" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="457.81110636393225" y="0" width="1" height="219.66266666666667" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1039" x1="0" y1="0" x2="687.4666595458984" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1040" x1="0" y1="0" x2="687.4666595458984" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1041" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1042" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1044" font-family="inherit" x="0" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1045"></tspan><title></title></text><text id="SvgjsText1047" font-family="inherit" x="38.192592196994354" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1048"></tspan><title></title></text><text id="SvgjsText1050" font-family="inherit" x="76.38518439398871" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1051"></tspan><title></title></text><text id="SvgjsText1053" font-family="inherit" x="114.57777659098305" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 115.57777214050293 237.1626739501953)"><tspan id="SvgjsTspan1054">Apr 04</tspan><title>Apr 04</title></text><text id="SvgjsText1056" font-family="inherit" x="152.77036878797742" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1057"></tspan><title></title></text><text id="SvgjsText1059" font-family="inherit" x="190.96296098497174" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1060"></tspan><title></title></text><text id="SvgjsText1062" font-family="inherit" x="229.15555318196613" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 230.1555519104004 237.1626739501953)"><tspan id="SvgjsTspan1063">Apr 07</tspan><title>Apr 07</title></text><text id="SvgjsText1065" font-family="inherit" x="267.34814537896045" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1066"></tspan><title></title></text><text id="SvgjsText1068" font-family="inherit" x="305.54073757595484" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1069"></tspan><title></title></text><text id="SvgjsText1071" font-family="inherit" x="343.7333297729492" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 344.73334884643555 237.1626739501953)"><tspan id="SvgjsTspan1072">Apr 10</tspan><title>Apr 10</title></text><text id="SvgjsText1074" font-family="inherit" x="381.9259219699436" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1075"></tspan><title></title></text><text id="SvgjsText1077" font-family="inherit" x="420.118514166938" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1078"></tspan><title></title></text><text id="SvgjsText1080" font-family="inherit" x="458.31110636393237" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 459.3110942840576 237.1626739501953)"><tspan id="SvgjsTspan1081">Apr 13</tspan><title>Apr 13</title></text><text id="SvgjsText1083" font-family="inherit" x="496.50369856092675" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1084"></tspan><title></title></text><text id="SvgjsText1086" font-family="inherit" x="534.6962907579211" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1087"></tspan><title></title></text><text id="SvgjsText1089" font-family="inherit" x="572.8888829549155" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 573.8888549804688 237.1626739501953)"><tspan id="SvgjsTspan1090">Apr 18</tspan><title>Apr 18</title></text><text id="SvgjsText1092" font-family="inherit" x="611.0814751519099" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1093"></tspan><title></title></text><text id="SvgjsText1095" font-family="inherit" x="649.2740673489043" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1096"></tspan><title></title></text><text id="SvgjsText1098" font-family="inherit" x="687.4666595458987" y="242.66266666666667" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1099"></tspan><title></title></text></g></g><g id="SvgjsG1123" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1124" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1125" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g><rect id="SvgjsRect1127" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1128" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 354.828px; top: 122.816px;"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">Apr 13</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Transactions: </span><span class="apexcharts-tooltip-text-y-value">$345</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 488.603px; top: 251.663px;"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px; min-width: 33.45px;">Apr 13</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
											<!--end::Chart-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Chart widget 26-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::Engage widget 1-->
									<div class="card h-md-100" dir="ltr">
										<!--begin::Body-->
										<div class="card-body d-flex flex-column flex-center">
											<!--begin::Heading-->
											<div class="mb-2">
												<!--begin::Title-->
												<h1 class="fw-semibold text-gray-800 text-center lh-lg">Scan TO Deposit
											
											
												<!--end::Title-->
												<!--begin::Illustration-->
												<div class="py-10 text-center">
													<img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=0xdfed6f33e22ee3c48f1f976a0664b3a555401e43" class="theme-light-show w-200px" alt="">
													<img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=0xdfed6f33e22ee3c48f1f976a0664b3a555401e43" class="theme-dark-show w-200px" alt="">
					
													<div class="badge badge-light">0xdfed6f33e22ee3c48f1f976a0664b3a555401e43</div>
												</div>
												<!--end::Illustration-->
											</div>
											<!--end::Heading-->
											<!--begin::Links-->
											<!-- <div class="text-center mb-1">
											
												<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_account" data-bs-toggle="modal">Try Now</a>
												
												<a class="btn btn-sm btn-light" href="../../demo19/dist/apps/ecommerce/sales/listing.html">Learn More</a>
												
											</div> -->
											<!--end::Links-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Engage widget 1-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								
								<!--end::Col-->
								<!--begin::Col-->
								
									<!--begin::Tables Widget 9-->
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
													<input type="text" data-kt-transaction-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search" />
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
													
												
													
													
													<!--begin::Export-->
													<!-- <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
													<i class="ki-duotone ki-exit-up fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>Export</button> -->
													<!--end::Export-->
												
												</div>
												<!--end::Toolbar-->
												
											
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body py-4">
											<!--begin::Table-->
											<table id="kt_datatable_transaction" class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
       
        <th>blockHash</th>
        <th>blockNumber</th>
    
		<th>gasUsed</th>
		<th>transactionHash</th>
		<th>status</th>
		<th>gas</th>
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
									<!--end::Tables Widget 9-->
								
								<!--end::Col-->
							</div>
							<!--end::Row-->
							
						
							
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
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>


		<script src="assets/js/general.js"></script>
		<script src="assets/js/transactionsDatatable.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->

	</body>
	<!--end::Body-->
</html>