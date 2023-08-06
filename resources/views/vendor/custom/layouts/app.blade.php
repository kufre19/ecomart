<!DOCTYPE html>
<html lang="en">

<!-- Ecomart/index-13.html  22 Nov <script>
    document.write(new Date().getFullYear())
</script> 09:59:06 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ecomart - Best Nigerian online commerce store</title>
    <meta name="keywords" content="Ecommerce Marketplace">
    <meta name="description" content="Ecomart - Best online commerce store">
    <meta name="author" content="Temple.inc">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('custom/assets/images/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('custom/assets/images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('custom/assets/images/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('custom/assets/images/icons/site.html') }}">
    <link rel="mask-icon" href="{{ asset('custom/assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('custom/assets/images/icons/favicon.ico') }}">
    <meta name="apple-mobile-web-app-title" content="Ecomart">
    <meta name="application-name" content="Ecomart">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('custom/assets/images/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
        href="{{ asset('custom/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('custom/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/assets/css/plugins/jquery.countdown.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('custom/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/assets/css/skins/skin-demo-13.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/assets/css/demos/demo-13.css') }}">
    {{-- ICON --}}
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>

    <div class="page-wrapper">
        <header class="header header-10 header-intro-clearance">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <!-- <a href="tel:#" style="color: white;"><i class="icon-phone"></i>Call: +0123 456 789</a> -->
                        <a href="{{ url('/') }}" class="logo header-top-logo">
                            <img src="{{ asset('custom/assets/images/demos/demo-13/logo.png') }}" alt="Ecomart Logo"
                                width="90" height="25">
                            <!-- <h1 Ecomart</h1> -->
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right header-right-links">

                        <ul class="top-menu">
                            <li>
                                <a href="#" style="color: rgb(2, 2, 2);">Navigation</a>
                                <ul>

                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#" style="color: rgb(10, 5, 5);">Engligh</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">Yoruba</a></li>
                                                    <li><a href="#">Hausa</a></li>
                                                    <li><a href="#">Igbo</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div><!-- End .header-dropdown -->
                                    </li>
                                    @guest
                                        <li class="login">
                                            <a href="{{ url('login') }}" style="color: rgb(0, 0, 0);">Sign in / Sign
                                                up</a>
                                        </li>
                                    @endguest
                                    @auth
                                        <li class="login">
                                            <a href="{{ url('dashboard') }}" style="color: rgb(0, 0, 0);">My Account</a>
                                        </li>
                                    @endauth
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->


            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="las la-bars"></i>
                        </button>

                        <a href="{{ url('/') }}" class="logo header-middle-logo">
                            <img src="{{ asset('custom/assets/images/demos/demo-13/logo.png') }}" alt="Ecomart Logo"
                                width="55" height="10">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div
                            class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="fa fa-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <div class="select-custom">
                                        <select id="cat" name="cat">

                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div><!-- End .select-custom -->
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fa fa-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="header-dropdown-link">

                            <a href="wishlist.html" class="wishlist-link">
                                <i class="fa fa-heart"></i>
                                <span class="wishlist-count">0</span>
                                <span class="wishlist-txt">Wishlist</span>
                            </a>


                        </div>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown show is-on">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display=""
                                title="Browse Categories">
                                Browse Categories
                            </a>

                            <div class="dropdown-menu ">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        @foreach ($categories as $category)
                                            @if (!empty($category->adsSubCategory))
                                                <li class="megamenu-container">
                                                    <a class="sf-with-ul"
                                                        href="#">{{ $category->category_name }}</a>

                                                    <div class="megamenu">
                                                        <div class="row no-gutters">
                                                            <div class="col-md-8">
                                                                <div class="menu-col">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="menu-title">
                                                                                {{ $category->category_name }}
                                                                            </div>
                                                                            <!-- End .menu-title -->
                                                                            <ul>
                                                                                @foreach ($category->adsSubCategory as $sub_cat)
                                                                                    <li>
                                                                                        <a
                                                                                            href="{{ url('ads/sub-category') . '/' . $sub_cat->id }}">
                                                                                            {{ $sub_cat->sub_category_name }}
                                                                                        </a>
                                                                                    </li>
                                                                                @endforeach


                                                                            </ul>


                                                                        </div><!-- End .col-md-6 -->


                                                                    </div><!-- End .row -->
                                                                </div><!-- End .menu-col -->
                                                            </div><!-- End .col-md-8 -->

                                                            <div class="col-md-4">
                                                                <div class="banner banner-overlay">
                                                                    <a href="category.html"
                                                                        class="banner banner-menu">
                                                                        <img src="{{ asset('custom/assets/images/demos/demo-13/menu/banner-1.jpg') }}"
                                                                            alt="Banner">
                                                                    </a>
                                                                </div><!-- End .banner banner-overlay -->
                                                            </div><!-- End .col-md-4 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .megamenu -->
                                                </li>
                                            @else
                                                <li><a
                                                        href="{{ url('ads/category') . '/' . $category->id }}">{{ $category->category_name }}</a>
                                                </li>
                                            @endif
                                        @endforeach






                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .col-lg-3 -->
                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li>
                                    <a href="{{ url('/') }}" class="sf">Home</a>
                                </li>

                                <li>
                                    <a href="{{ url('contact-us') }}" class="sf">Contact</a>

                                </li>
                                @guest
                                    <li>
                                        <a href="{{ url('login') }}" class="sf">Login</a>
                                    </li>
                                @endguest
                                @auth
                                    <li>
                                        <a href="{{ url('dashboard') }}" class="sf">My Account</a>
                                    </li>
                                @endauth
                                <li>
                                    <a href="{{ url('faqs') }}" class="sf">FAQs</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .col-lg-9 -->
                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i>
                        <p>Clearance Up to 30% Off</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        @yield('main-content')


        <footer class="footer footer-2">
            <div class="icon-boxes-container">
                <div class="container">

                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->

            <div class="footer-middle border-0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="widget widget-about">
                                <img src="{{ asset('custom/assets/images/demos/demo-13/logo-footer.png') }}"
                                    class="footer-logo" alt="Footer Logo" width="105" height="25">
                                <!-- <h1 class="footer-logo">Ecomart</h1> -->
                                <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate
                                    magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan
                                    porttitor, facilisis luctus, metus. </p>

                                <div class="widget-about-info">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <span class="widget-about-title">Got Question? Call us 24/7</span>
                                            <a href="tel:123456789">+0123 456 789</a>
                                        </div><!-- End .col-sm-6 -->

                                    </div><!-- End .row -->
                                </div><!-- End .widget-about-info -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-12 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Information</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="about.html">About Ecomart</a></li>
                                    <li><a href="#">How to shop on Ecomart</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="login.html">Post Your Ads</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->


                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="{{ url('login') }}">Sign In</a></li>

                                    <li><a href="#">My Wishlist</a></li>


                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-64 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Ecomart Store. All Rights Reserved.
                    </p><!-- End .footer-copyright -->
                    <ul class="footer-menu">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- End .footer-menu -->

                    <div class="social-icons social-icons-color">
                        <span class="social-label">Social Media</span>
                        <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                                class="lab la-google"></i></a>
                        <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                                class="lab la-twitter"></i></a>
                        <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                                class="lab la-instagram"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="fa fa-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab"
                        role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab"
                        role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel"
                    aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li>
                                <a href="{{ url('/') }}" class="sf">Home</a>
                            </li>

                            <li>
                                <a href="{{ url('contact-us') }}" class="sf">Contact</a>

                            </li>
                            <li>
                                <a href="{{ url('login') }}" class="sf">Login</a>
                            </li>
                            <li>
                                <a href="{{ url('faqs') }}" class="sf">FAQs</a>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">

                            @foreach ($categories as $category)
                                <li><a
                                        href="{{ url('ads/category') . '/' . $category->id }}">{{ $category->category_name }}</a>
                                </li>
                            @endforeach


                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                        class="lab la-google"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                        class="lab la-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                        class="lab la-instagram"></i></a>

            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->



    @include('platform::partials.toast')

    <!-- Plugins JS File -->
    <script src="{{ asset('custom/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.countdown.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('custom/assets/js/main.js') }}"></script>
    <script src="{{ asset('custom/assets/js/demos/demo-13.js') }}"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

    <script>
        // This script will work for login FB btn
        document.addEventListener('DOMContentLoaded', function() {
            var loginFbButton = document.getElementById('login-fb');
            loginFbButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default action of the button

                // Add your logic here to handle the login state
                // This function will be executed when the "Login With Facebook" button is clicked
                checkLoginState();
            });
        });


        // This script will work for registeration FB btn
        document.addEventListener('DOMContentLoaded', function() {
            var loginFbButton = document.getElementById('signup-fb');
            loginFbButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default action of the button

                // Add your logic here to handle the login state
                // This function will be executed when the "Login With Facebook" button is clicked
                checkLoginState();
            });
        });


        function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
            console.log('statusChangeCallback');
            console.log(response); // The current login status of the person.
            if (response.status === 'connected') { // Logged into your webpage and Facebook.

                FB.api('/me', function(response) {
                    console.log(response);

                    directToServer(response);

                });
                // loginFBUser();
            } else { // Not logged into your webpage or we are unable to tell.
                loginFBUser();
            }
        }


        function checkLoginState() { // Called when a person is finished with the Login Button.
            FB.getLoginStatus(function(response) { // See the onlogin handler
                statusChangeCallback(response);
            });
        }


        window.fbAsyncInit = function() {
            FB.init({
                appId: '{{ env('FACEBOOK_CLIENT_ID') }}',
                cookie: true, // Enable cookies to allow the server to access the session.
                xfbml: true, // Parse social plugins on this webpage.
                version: '{{ env('FACEBOOK_CLIENT_VERSION') }}' // Use this Graph API version for this call.
            });
        };

        function loginFBUser() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
            console.log('Welcome!  Fetching your information.... ');
            FB.login(function(response) {
                if (response.authResponse) {
                    console.log('Welcome!  Fetching your information.... ');
                    FB.api('/me', function(response) {
                        console.log('Good to see you, ' + response.name + '.');
                    });
                    console.log(response);
                    directToServer(response);

                } else {
                    console.log('User cancelled login or did not fully authorize.');
                }
            }, {
                scope: 'public_profile'
            });
        }

        function directToServer(data) {
            console.log(data);
            var userID = data.id;
            var name = data.name
            var csrf_token = "{{ csrf_token() }}"

            var loginData = {
                name: name,
                userID: userID,
                email: '',
                phone: '',
                _token: csrf_token
            };
            console.log(loginData);


            // Create a form dynamically
            var form = document.createElement("form");

            // Set the form attributes
            form.method = "POST";
            form.action = "{{ url('auth/facebook/callback') }}";

            // Add the data to the form
            var inputToken = document.createElement("input");
            inputToken.name = "_token";
            inputToken.value = "{{ csrf_token() }}";
            form.appendChild(inputToken);

            var inputName = document.createElement("input");
            inputName.name = "name";
            inputName.value = name;
            form.appendChild(inputName);

            var inputUserID = document.createElement("input");
            inputUserID.name = "userID";
            inputUserID.value = userID;
            form.appendChild(inputUserID);

            var inputName = document.createElement("input");
            inputName.name = "email";
            inputName.value = "";
            form.appendChild(inputName);

            var inputName = document.createElement("input");
            inputName.name = "phone";
            inputName.value = "";
            form.appendChild(inputName);

            // Append the form to the body (it'll be invisible)
            document.body.appendChild(form);

            // Submit the form
            form.submit();

            // fetch("{{ url('auth/facebook/callback') }}", {
            //         method: 'POST',
            //         headers: {
            //             'Content-Type': 'application/json'
            //         },
            //         body: JSON.stringify(loginData)
            //     })
            //     .then(response => {
            //         if (response.ok) {
            //             // Login successful, do something
            //             console.log('Login successful');
            //             window.location.href = "{{ url('dashboard') }}";
            //         } else {
            //             // Login failed, do something
            //             console.log('Login failed');
            //         }
            //     })
            //     .catch(error => {
            //         // Error occurred during the login request, handle the error
            //         console.error('Error:', error);
            //     });
        }
    </script>
</body>

</html>
