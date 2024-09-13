<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from www.bootstrap.gallery/demos/unity-admin-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 09:25:43 GMT -->
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Admin Templates - Dashboard Templates - Unify Admin Template</title>

		<!-- Meta -->
		<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery/">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="assets/images/favicon.svg" />

		<!-- *************
			************ CSS Files *************
		************* -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
		<link rel="stylesheet" href="assets/css/main.min.css" />

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
	</head>

	<body>
		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- App header starts -->
			@include('backend.header')

			<!-- App header ends -->

			<!-- Main container start -->
			<div class="main-container">

				<!-- Sidebar wrapper start -->
				@include('backend.sidebar')
				<!-- Sidebar wrapper end -->

				<!-- App container starts -->
				<div class="app-container">

					<!-- App hero header starts -->
					<div class="mb-4 app-hero-header">

                        <!-- Breadcrumb and Stats start -->
                        <div class="mb-3 d-flex align-items-center">
                    
                            <!-- Breadcrumb start -->
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <i class="bi bi-house lh-1"></i>
                                    <a href="index.html" class="text-decoration-none">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                            </ol>
                            <!-- Breadcrumb end -->
                    
                            <!-- Sales stats start -->
                            <div class="flex-row ms-auto d-lg-flex d-none">
                                <div class="flex-row gap-1 d-flex">
                                    <button class="btn btn-sm btn-dark">Today</button>
                                    <button class="btn btn-sm btn-dark btn-transparent">
                                        7 Days
                                    </button>
                                    <button class="btn btn-sm btn-dark btn-transparent">
                                        15 Days
                                    </button>
                                    <button class="btn btn-sm btn-dark btn-transparent">
                                        30 Days
                                    </button>
                                    <button class="btn btn-sm btn-dark btn-transparent">
                                        90 Days
                                    </button>
                                </div>
                            </div>
                            <!-- Sales stats end -->
                        </div>
                        <!-- Breadcrumb and stats end -->
                    
                    
                    </div>
					<!-- App Hero header ends -->
					<!-- App body starts -->
					@yield('content')
					@yield('add_member')
					@yield('profile_update')
					<!-- App body ends -->

					<!-- App footer start -->
					@include('backend.footer')
					<!-- App footer end -->

				</div>
				<!-- App container ends -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->
		@yield('scripts')
		<!-- Overlay Scroll JS -->
		<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Apex Charts -->
		<script src="assets/vendor/apex/apexcharts.min.js"></script>
		<script src="assets/vendor/apex/custom/dash1/sales.js"></script>
		<script src="assets/vendor/apex/custom/dash1/revenue.js"></script>
		<script src="assets/vendor/apex/custom/dash1/source.js"></script>

		<!-- Vector Maps -->
		<script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js"></script>
		<script src="assets/vendor/jvectormap/gdp-data.js"></script>
		<script src="assets/vendor/jvectormap/continents-mill.js"></script>
		<script src="assets/vendor/jvectormap/custom/world-map-markers3.js"></script>

		<!-- Custom JS files -->
		<script src="assets/js/custom.js"></script>
	</body>


<!-- Mirrored from www.bootstrap.gallery/demos/unity-admin-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 09:27:31 GMT -->
</html>