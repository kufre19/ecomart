@extends('vendor.custom.layouts.app')


@section('main-content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
            style="background-image: url({{ asset('custom/assets/images/backgrounds/login-bg.jpg') }})">
            <div class="container">
                <div class="form-box">
                    <div class="form-tab">
                        
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                {{-- LOGIN FORM START --}}
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                                <form method="POST" action="{{ url('reset-password') }}">
                                    @csrf

                                   

                                    <div class="form-group">
                                        <label for="login-password">New Password *</label>
                                        <input type="password" class="form-control" id="login-password" name="password"
                                            required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="password-confirm">Confirm New Password *</label>
                                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation"
                                            required>
                                    </div><!-- End .form-group -->


                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>Reset Password</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                      

                                    </div><!-- End .form-footer -->
                                </form>
                                {{-- LOGIN FORM ENDS --}}

                            </div><!-- .End .tab-pane -->
                            
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .container -->
        </div><!-- End .login-page section-bg -->
    </main><!-- End .main -->
@endsection
