<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from www.bootstrap.gallery/demos/unity-admin-dashboard/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 09:29:09 GMT -->
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>forgot password</title>

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
                    <form method="POST" action="{{ route('password.email') }}" class="my-5">
                        @csrf
						<div class="login-form rounded-4 p-4 mt-5">
							<a class="mb-4 d-flex">
								<img src="assets/images/logo.svg" class="img-fluid login-logo" alt="Earth Admin Dashboard" />
							</a>
							<h5 class="fw-light mb-5 lh-2">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}

							</h5>
							<div class="mb-3">
								<label class="form-label">Your Email</label>
								<input class="form-control border-0" id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter your email" />
							</div>
							<div class="d-grid py-3 mt-4">
								<button type="submit" class="btn btn-lg btn-primary">
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Container end -->
	</body>


<!-- Mirrored from www.bootstrap.gallery/demos/unity-admin-dashboard/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 09:29:09 GMT -->
</html>