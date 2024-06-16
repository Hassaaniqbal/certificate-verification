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
								<div data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
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
										
										<!--end::Col-->
										<?php
// Database connection parameters
$host = 'localhost'; // or your database host
$user = 'root'; // your database username
$pass = ''; // your database password
$dbname = 'certichain'; // your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data
$sql = "SELECT * FROM certificates ORDER BY date DESC";
$result = $conn->query($sql);

// Check if the query returned any rows
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";

		$id = $row["id"];
		$cid = $row["cid"];
		$status = $row["status"];
		$ipfsUrl = $row["ipfsUrl"];
		$blockdata = $row["blockdata"];
		// $jsonContent = file_get_contents($row["ipfsUrl"]);
		// if ($jsonContent !== false) {
		// 	// Decode the JSON content
		// 	$data = json_decode($jsonContent, true);
	
		// 	// Extract the firstname and lastname
		// 	// $firstname = $data['firstname'];
		// 	// $lastname = $data['lastname'];
	
		// 	// echo "Firstname: " . $firstname . "<br>";
		// 	// echo "Lastname: " . $lastname . "<br>";
		// } else {
		// 	echo "Failed to fetch JSON from IPFS URL";
		// }
		?>

		<!--begin::Col-->
		<div class="col-sm-6 col-xxl-3">
											<!--begin::Card widget 14-->
											<div class="card card-flush h-xl-100">
												<!--begin::Body-->
												<div class="card-body text-center pb-5">
													<!--begin::Overlay-->
													<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" target = "_blank" href="api/myApi/uploads/<?php  echo $cid;  ?>.png">
														<!--begin::Image-->
														<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('api/myApi/uploads/<?php  echo $cid;  ?>.png"></div>
														<!--end::Image-->
														<!--begin::Action-->
														<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
															<i class="ki-duotone ki-eye fs-3x text-white">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</div>
														<!--end::Action-->
													</a>
													<!--end::Overlay-->
													<!--begin::Info-->
													<div class="d-flex align-items-end flex-stack mb-1">
														<!--begin::Title-->
														<div class="text-start">
															<span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block"><?php  echo $cid;  ?></span>
															<span class="text-gray-400 mt-1 fw-bold fs-6">ID: <?php  echo $id;  ?> </span>
														</div>
														<!--end::Title-->
														<!--begin::Total-->
														<span class="text-gray-600 text-end fw-bold fs-6"><?php  echo $status ;  ?></span>
														<!--end::Total-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::Body-->
												<!--begin::Footer-->
												<div class="card-footer d-flex flex-stack pt-0">
													<!--begin::Link-->
													<a class="btn btn-sm btn-primary flex-shrink-0 me-2" target = "_blank" href="<?php  echo $ipfsUrl;  ?>" >View IPFS</a>
													<!--end::Link-->
													<!--begin::Link-->
													<a class="btn btn-sm btn-light flex-shrink-0" target = "_blank" href="https://explorer.celo.org/mainnet/tx/<?php  echo $blockdata;  ?>">VERIFY</a>
													<!--end::Link-->
												</div>
												<!--end::Footer-->
											</div>
											<!--end::Card widget 14-->
										</div>
										<!--end::Col-->

		<?php
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
								
										
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
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->

		<script src="assets/js/general.js"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>