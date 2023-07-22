@extends('vendor.custom.layouts.app')


@section('main-content')
    <main class="main">


        <div class="mb-4"></div><!-- End .mb-2 -->

        <div class="container">
            <h2 class="title text-center mb-2">Explore Popular Categories</h2><!-- End .title -->

            <div class="cat-blocks-container">
                <div class="row">
                    <div class="col-4 col-lg-2">
                        <a href="{{url("ads/create")}}" class="cat-block">
                            <figure>
                                <span>
                                    <i class="fa fa-plus fa-5x"></i>
                                    {{-- <img src="{{asset('custom/assets/images/demos/demo-13/cats/14.jpg')}}" alt="Category image"> --}}
                                </span>
                            </figure>

                            <h3 class="cat-block-title">POST AD</h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    @foreach ($categories as $category)
                        <div class="col-4 col-lg-2">
                            <a href="{{url('ads/category')."/".$category->id}}" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="{{asset(storage_path($category->image))}}" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">{{$category->category_name}}</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                    @endforeach

                  
                  
            
                   

                </div><!-- End .row -->
            </div><!-- End .cat-blocks-container -->
        </div><!-- End .container -->

        <div class="mb-2"></div><!-- End .mb-2 -->

        <!-- End .container -->

        <div class="mb-3"></div><!-- End .mb-3 -->

        <div class="mb-3"></div><!-- End .mb-3 -->

      

        

        <div class="container">
            <div class="intro-slider-container">
                <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl"
                    data-owl-options='{
                    "nav": false,
                    "responsive": {
                        "992": {
                            "nav": true
                        }
                    }
                }'>
                    <div class="intro-slide"
                        style="background-image: url(assets/images/demos/demo-13/slider/slide-1.png);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="col-auto offset-lg-3 intro-col">
                                    <h3 class="intro-subtitle">Trade-In Offer</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">MacBook Air <br>Latest Model
                                        <span>
                                            <sup class="font-weight-light">from</sup>
                                            <span class="text-primary">₦999<sup>,99</sup></span>
                                        </span>
                                    </h1><!-- End .intro-title -->

                                    <a href="category.html" class="btn btn-outline-primary-2">
                                        <span>Shop Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-auto offset-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide"
                        style="background-image: url(assets/images/demos/demo-13/slider/slide-2.jpg);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="col-auto offset-lg-3 intro-col">
                                    <h3 class="intro-subtitle">Trevel & Outdoor</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Original Outdoor <br>Beanbag
                                        <span>
                                            <sup class="font-weight-light line-through">₦89,99</sup>
                                            <span class="text-primary">₦29<sup>,99</sup></span>
                                        </span>
                                    </h1><!-- End .intro-title -->

                                    <a href="category.html" class="btn btn-outline-primary-2">
                                        <span>Shop Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-auto offset-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide"
                        style="background-image: url(assets/images/demos/demo-13/slider/slide-3.jpg);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="col-auto offset-lg-3 intro-col">
                                    <h3 class="intro-subtitle">Fashion Promotions</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Tan Suede <br>Biker Jacket
                                        <span>
                                            <sup class="font-weight-light line-through">₦240,00</sup>
                                            <span class="text-primary">₦180<sup>,99</sup></span>
                                        </span>
                                    </h1><!-- End .intro-title -->

                                    <a href="category.html" class="btn btn-outline-primary-2">
                                        <span>Shop Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-auto offset-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->
        </div><!-- End .container -->

    </main><!-- End .main -->
@endsection
