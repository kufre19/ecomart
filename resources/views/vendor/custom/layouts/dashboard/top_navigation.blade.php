<header class="header">
    <div class="header-top" style="background-color: #9900CC;">
        <div class="container">
            <div class="header-left">
                <div class="header-dropdown">
                    <a href="#" style="color: white;">Usd</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">NGN</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropdown -->

            </div><!-- End .header-left -->

        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="index.html" class="logo">
                    <img src="{{ asset('custom/assets/images/logo.png')}}" alt="Ecomart Logo" width="105" height="25">
                </a>

                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li>
                            <a href="{{url('dashboard')}}" class="sf">Home</a>
                        </li>
                        <li>
                            <a href="{{url('contact')}}" class="sf">Contact</a>
                        </li>
                        <li>
                            <a href="{{url('faqs')}}" class="sf">FAQs</a>
                        </li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <div class="header-search">
                    <a href="#" class="search-toggle" role="button" title="Search"><i
                            class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q"
                                placeholder="Search in..." required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
               
               {{-- @include('vendor.custom.layouts.dashboard.cart_item') --}}
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->
