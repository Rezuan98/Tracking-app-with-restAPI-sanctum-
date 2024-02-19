<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>@yield('title')</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('/assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
 	<link rel="stylesheet" href="{{asset('/assets/vendors/flatpickr/flatpickr.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	
	<link rel="stylesheet" href="{{asset('/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('/assets/css/demo2/style.css')}}">
  <!-- End layout styles -->

  
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		
    @include('dashboard.organs.sidebar')
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			@include('dashboard.organs.navbar')
			<!-- partial -->

			<div class="page-content">

       

          @yield('body')

       
       

			</div>

			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2024 <a href="#" target="_blank">Freelance It Lab,Mymensingh.</a>.</p>
				<p class="text-muted">Go to our Website <i class="mb-1 text-primary ms-1" data-feather="arrow-up-left"></i></p>
			</footer>
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('/assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{asset('/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{asset('/assets/js/dashboard-dark.js')}}"></script>
	<!-- End custom js for this page -->

</body>
</html>    