{{-- @extends('dashboard.master') --}}
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Login</title>

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
	<link rel="stylesheet" href="{{asset('/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('/assets/css/demo2/style.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		
        <nav class="sidebar">
            <div class="sidebar-header">
              <a href="" class="sidebar-brand">
                Admin<span>FIT</span>
              </a>
              <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="sidebar-body">
              <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                  </a>
                </li>
        
        
        
                <li class="nav-item nav-category">Marketing Team</li>
        
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Marketers</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="#" class="nav-link">Add Marketer</a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">All Markers</a>
                      </li>
                     
                    </ul>
                  </div>
                </li>
        
        
        
                <li class="nav-item">
                  <a href="#email" data-bs-toggle="collapse" role="button" aria-expanded="false" class="nav-link" aria-controls="email">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Area Managers</span>
                   
                  </a>
                  
                </li>
                <li class="nav-item">
                  <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Admin Panel
                    </span>
                  </a>
                </li>
                <li class="nav-item nav-category">Components</li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Developers Team</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="pages/ui-components/accordion.html" class="nav-link">UI/XI</a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/ui-components/alerts.html" class="nav-link">Frontend</a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/ui-components/alerts.html" class="nav-link">Backend</a>
                      </li>
                     
                    </ul>
                  </div>
                </li>
                
               
                
                
                
                
               
               
                <li class="nav-item nav-category">Documents</li>
                <li class="nav-item">
                  <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Documentation</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			@include('dashboard.organs.navbar')
			<!-- partial -->


			<div class="page-content">

       

        <div class="main-wrapper">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
            <div class="col-md-4 pe-md-0">
              <div class="auth-side-wrapper">

              </div>
            </div>
            <div class="col-md-6 ps-md-0">
              <div class="auth-form-wrapper px-4 py-5">
                <a href="#" class="noble-ui-logo logo-light d-block mb-2">FIT<span>Admin</span></a>
                <h4 class="text-muted fw-normal mb-4">Login As Admin</h4>
                <form id="loginForm" class="forms-sample">
                  <div class="mb-3">
                    <label for="userEmail" class="form-label">UserName</label>
                    <input type="text" class="form-control" id="username" placeholder="UserName">
                  </div>
                  <div class="mb-3">
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" autocomplete="current-password" placeholder="Password">
                  </div>
                  
                  <div>
                    <button type="submit" id="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                    
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

       
       

			</div>

			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2024 <a href="https://www.nobleui.com" target="_blank">Freelance It Lab,Mymensingh.</a>.</p>
				<p class="text-muted">Go to our Website <i class="mb-1 text-primary ms-1" data-feather="arrow-up-left"></i></p>
			</footer>
			<!-- partial -->
		
		</div>
	</div>
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault(); // prevent form submission
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username === "adminfit" && password === "fit123") {
                window.location.href = "/home"; // Redirect to dashboard route
            } else {
                document.getElementById("message").innerHTML = "Invalid username or password";
            }
        });
    </script>
    
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
@section('title','Login')

