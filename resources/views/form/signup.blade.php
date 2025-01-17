<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from www.bootstrap.gallery/demos/unity-admin-dashboard/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 09:28:06 GMT -->
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Login Form</title>

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
	</head>

	<body class="login-bg">
		<!-- Container start -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-4 col-lg-5 col-sm-6 col-12">
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
					
                    <form method="POST" action="{{ route('login') }}" class="my-5">
                        @csrf
						<div class="login-form rounded-4 p-4 mt-5">
							<a class="mb-4 d-flex">
								<img src="assets/images/logo.svg" class="img-fluid login-logo" alt="Unity Admin Dashboard" />
							</a>
							<h2 class="fw-light mb-4">Login</h2>
							<div class="mb-3">
								<label class="form-label" for="email" value="{{ __('Email') }}">Your Email</label>
								<input id="email" type="text" class="form-control border-0"  type="email" name="email" :value="old('email')" required autofocus placeholder="Enter email"/>

							</div>
							<div class="mb-3">
								<label class="form-label" for="password" value="{{ __('Password') }}">Your Password</label>
								<input class="form-control border-0" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter password" />
							</div>
							<div class="d-flex align-items-center justify-content-between">
								<div class="form-check m-0">
									<input class="form-check-input border-0" type="checkbox" value="" id="remember_me" name="remember" />
									<label class="form-check-label" for="rememberPassword">Remember</label>
								</div>
								
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-white text-decoration-underline">Lost password?
                                </a>
                                @endif
							</div>
							<div class="d-grid py-3 mt-3">
								<button type="submit" class="btn btn-lg btn-primary">
									Login
								</button>
							</div>
							<div class="text-center py-3">or Login with</div>
							<div class="d-flex gap-2 justify-content-center">
								<button type="submit" class="btn btn-outline-light">
									<i class="bi bi-google me-2"></i>Gmail
								</button>
								<button type="submit" class="btn btn-outline-light">
									<i class="bi bi-facebook me-2"></i>Facebook
								</button>
							</div>
							<div class="text-center pt-4">
								<span>Not registered?</span>
								<a href="{{ url('/register') }}" class="text-white text-decoration-underline ms-2">
									SignUp</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Container end -->
	</body>


<!-- Mirrored from www.bootstrap.gallery/demos/unity-admin-dashboard/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 09:28:06 GMT -->
</html>