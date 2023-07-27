@extends('vendor.custom.layouts.app')


@section('main-content')
    <main class="main">

        <div class="mb-4"></div><!-- End .mb-2 -->

        <div class="container furniture">
            <div class="heading heading-flex heading-border mb-3">
                <div class="heading-left">
                    <h2 class="title">{{ $category->category_name }}</h2> <i class="fa fa-arrow-right fa-sm"
                        aria-hidden="true"></i><!-- End .title -->
                </div><!-- End .heading-left -->


            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="furn-new-tab" role="tabpanel" aria-labelledby="furn-new-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1280": {
                                    "items":5,
                                    "nav": true
                                }
                            }
                        }'>

                        @if ($found)
                            @foreach ($ads as $ad)
                                <div class="product">
                                    <figure class="product-media">
                                        {{-- <span class="product-label label-new">New</span> --}}
                                        <a href="product.html">
                                            <img src="{{ asset($ad->cover_image) }}" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                    to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Contact the Advertiser"><span>Contact
                                                    Advertiser</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">{{ $category->category_name }}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">{{ $ad->title }}</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            ₦ {{ number_format($ad->price, 2) }}
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="">
                                                Negotioable:
                                            </div><!-- End .ratings -->
                                             {{$ad->negotiable}}  
                                        </div><!-- End .rating-container -->


                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            @endforeach
                        @else
                            <h5>Sorry No Ads under {{ $category->category_name }}, see other Ads below</h5>
                            @foreach ($ads as $ad)
                                <div class="product">
                                    <figure class="product-media">
                                        {{-- <span class="product-label label-new">New</span> --}}
                                        <a href="product.html">
                                            <img src="{{ asset($ad->cover_image) }}" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                    to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Contact the Advertiser"><span>Contact
                                                    Advertiser</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">{{ $ad->getcategory->category_name }}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">{{ $ad->title }}</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            ₦ {{ number_format($ad->price, 2) }}
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="">
                                                Negotioable:
                                            </div><!-- End .ratings -->
                                             {{$ad->negotiable}}  
                                        </div><!-- End .rating-container -->


                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            @endforeach
                        @endif


                    <p>{{$ads->link()}}</p>
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->


            </div><!-- End .tab-content -->
        </div><!-- End .container -->

    </main><!-- End .main -->
@endsection
