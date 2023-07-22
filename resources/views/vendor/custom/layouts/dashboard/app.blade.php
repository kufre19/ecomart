<!DOCTYPE html>
<html lang="en">


<!-- Ecomart/dashboard.html  22 Nov <script>
    document.write(new Date().getFullYear())
</script> 10:03:13 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ecomart - Best Nigerian online eCommerce store</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Ecomart - Best Nigerian online eCommerce store">
    <meta name="author" content="p-themes">
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
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('custom/assets/css/bootstrap.min.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('custom/assets/css/style.css') }}">

     {{-- ICON --}}
     <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
     integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
 </script>

 @yield('extra-styling')
</head>

<body>

    <div class="page-wrapper">
        @include('vendor.custom.layouts.dashboard.top_navigation')

        <main class="main">
            <div class="page-header text-center"
                style="background-image: url('{{ asset('custom/assets/images/page-header-bg.jpg') }}')">
                <div class="container">
                    <h1 class="page-title">My Account<span>Shop</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="page-content">
                <div class="dashboard">
                    <div class="container">
                        <div class="row">
                            {{-- SIDE BAR NAVIGATION --}}
                            @include('vendor.custom.layouts.dashboard.sidebar_nav')

                            @yield('main-content')

                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .dashboard -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer">

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Ecomart Store. All Rights Reserved.
                    </p><!-- End .footer-copyright -->
                    <figure class="footer-payments">
                       
                    </figure><!-- End .footer-payments -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="{{url("")}}">Home</a>

                       
                    </li>
                   
                    <li>
                        <a href="product.html" class="sf-with-ul">Contact</a>
                    </li>
                  
                    
                    <li>
                        <a href="elements-list.html">FAQs</a>
                        
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                        class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                        class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                        class="icon-instagram"></i></a>
               
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
  
    <!-- Plugins JS File -->
    <script src="{{ asset('custom/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('custom/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('custom/assets/js/main.js') }}"></script>
    
</body>


<!-- Ecomart/dashboard.html  22 Nov <script>
    document.write(new Date().getFullYear())
</script> 10:03:13 GMT -->

</html>
