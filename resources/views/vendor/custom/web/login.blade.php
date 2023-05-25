@extends('vendor.custom.layouts.app')


@section('main-content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
            style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            <div class="container">
                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab"
                                    aria-controls="signin-2" aria-selected="false">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2"
                                    role="tab" aria-controls="register-2" aria-selected="true">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                <form method="POST" action="{{url("login")}}">

                                    <div class="form-group">
                                        <label for="login-email">Email address *</label>
                                        <input type="email" class="form-control" id="login-email" name="email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="login-password">Password *</label>
                                        <input type="password" class="form-control" id="login-password" name="password"
                                            required>
                                    </div><!-- End .form-group -->


                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>LOG IN</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember-2">
                                            <label class="custom-control-label" for="signin-remember-2">Remember
                                                Me</label>
                                        </div><!-- End .custom-checkbox -->

                                        <a href="#" class="forgot-link">Forgot Your Password?</a>
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade show active" id="register-2" role="tabpanel"
                                aria-labelledby="register-tab-2">
                                <form method="POST" id="registration-form"
                                    onsubmit="submitForm(event, 'https://backoffice.ecomart.ng/api/user/register')">
                                    <div class="form-group">
                                        <label for="name">Your username*</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your email address *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="password">Password *</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            required>
                                    </div><!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password *</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation" required>
                                    </div><!-- End .form-group -->
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <!-- <script>
                                        $(document).ready(function() {
                                                    //handle registration form submit
                                                    $('#registration-form').on('submit', function(event) {
                                                        event.preventDefault();
                                                        var registrationData = {
                                                            'name': $('#name').val(),
                                                            'email': $('#email').val(),
                                                            'password': $('#password').val(),
                                                            'password-confirmation': $('#confirm-password').val(),
                                                        };
                                                        $.ajax({
                                                            url: 'https://backoffice.ecomart.ng/api/user/register',
                                                            method: 'POST',
                                                            data: registrationData,
                                                            success: function(response) {
                                                                alert('Registration successful');
                                                            },
                                                            error: function(xhr, status, error) {
                                                                alert('Registration failed:' + error);
                                                            }
                                                        });
                                                    });

                                                    //handle login form submit
                                                    $('#login-form').on('submit', function(event) {
                                                                event.preventDefault();
                                                                var loginData = {
                                                                    'email': $('#email').val(),
                                                                    'password': $('#password').val()
                                                                }
                                                                $.ajax({
                                                                    url: 'https://backoffice.ecomart.ng/api/user/login',
                                                                    method: 'POST',
                                                                    data: loginData,
                                                                    success: function(response) {
                                                                        alert('Login successful');
                                                                        //save access token for subsequent requests
                                                                        localStorage.setItem('access_token', response, access_token);
                                                                    },
                                                                    error: function(xhr, status, error) {
                                                                        alert('Login Failed' + error)
                                                                    }
                                                                })
                                                            }
                                    </script> -->
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SIGN UP</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy-2"
                                                required>
                                            <label class="custom-control-label" for="register-policy-2">I agree to
                                                the <a href="#">privacy policy</a> *</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login  btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .container -->
        </div><!-- End .login-page section-bg -->
    </main><!-- End .main -->
@endsection
