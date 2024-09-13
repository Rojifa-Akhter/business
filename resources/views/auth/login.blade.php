@extends('form.index')
@section('signup')
<section class="sign">
    <div class="p-5 bg-white border">
        <div class="row">
            <div class="mb-4 col-lg-6 mb-lg-0">
                <div class="p-3 bg-white p-lg-0 pr-lg-5 border-lg-right border-lg-down">
                 <div class="mb-3 auth-info" style="border-right: 1px solid #ccc;">                    
                    <h2 class="mb-4 auth-title text-muted">Member Login</h2>
					@if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
						@csrf
                        <div class="mb-4 auth-input-group">
                            <span class="auth-input-icon"><i class="icofont-ui-user"></i></span>
                            <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter email">                        
                        </div>
                        <div class="mb-4 auth-input-group">
                            <span class="auth-input-icon"><i class="icofont-ui-lock"></i></span>
                            <input class="form-control" type="password" name="password" id="password" required autocomplete="current-password" placeholder="Enter password">                        
                        </div>
                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                <label class="custom-control-label text-muted text-15" for="rememberPassword">Remember Me</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-secondary text-14">Forgot Password?</a>
                                </a>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="px-5 btn btn-primary">Sign In</button>
                        </div>
                    </form>
                    <p class="mt-3 text-center text-muted">New User? <a href="{{ url('business_listing') }} " class="text-link">Join Free Now</a></p>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-4">
                <div class="p-3 bg-white p-lg-0 pr-lg-5 border-lg-right border-lg-down">

                    <h2 class="mb-4 text-muted">Not a Member Yet? Join Free to...</h2>
                    <ul class="list-unstyled">
                        <li class="mb-2 d-flex align-items-center">
                            <i class="mr-2 icofont-check text-primary"></i>
                            Connect With Millions of Buyers and Sellers
                        </li>
                        <li class="mb-2 d-flex align-items-center">
                            <i class="mr-2 icofont-check text-primary"></i>
                            Promote Business Profile with Product Showcase
                        </li>
                        <li class="mb-2 d-flex align-items-center">
                            <i class="mr-2 icofont-check text-primary"></i>
                            Expand Your Business Network – Smartly!
                        </li>
                        <li class="mb-2 d-flex align-items-center">
                            <i class="mr-2 icofont-check text-primary"></i>
                            Boost Your Search Engine Rankings
                        </li>
                        <li class="mb-2 d-flex align-items-center">
                            <i class="mr-2 icofont-check text-primary"></i>
                            Direct Buyer - Seller Communication
                        </li>
                        <li class="mb-2 d-flex align-items-center">
                            <i class="mr-2 icofont-check text-primary"></i>
                            Conduct New Business Opportunities
                        </li>
                    </ul>
                    <div class="mt-4 text-center">
                        <a href="{{ url('business_listing') }}" class="px-4 btn btn-outline-primary">Join Free Now</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</section>
            

@endsection
