@extends('vendor.custom.layouts.app')


@section('main-content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Ads</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $ad->title }}</li>
                </ol>


            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="product-details-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        <img id="product-zoom" src="{{ asset($ad->cover_image) }}"
                                            data-zoom-image="{{ asset($ad->cover_image) }}" alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                        @foreach ($ad->adsImage as $ad_images)
                                            <a class="product-gallery-item active" href="#"
                                                data-image="{{ asset($ad_images->ads_image) }}"
                                                data-zoom-image="{{ asset($ad_images->ads_image) }}">
                                                <img src="{{ asset($ad_images->ads_image) }}" alt="product side">
                                            </a>
                                        @endforeach


                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="product-details">
                                <h1 class="product-title">{{ $ad->title }}</h1><!-- End .product-title -->

                                <div class="ratings-container">
                                    <div class="">
                                        Negotiable:
                                    </div><!-- End .ratings -->
                                    {{ $ad->negotiable }}
                                </div><!-- End .rating-container -->

                                <div class="product-price">
                                    ₦ {{ number_format($ad->price, 2) }}
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p>Manufacturer Year: {{ $ad->manufacturer_year }}</p>
                                    <p>Condition: {{ $ad->condition }}</p>
                                    <p>Location: {{ $ad->location }}</p>

                                </div><!-- End .product-content -->





                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Category:</span>
                                        <a
                                            href="{{ url('ads/category') . '/' . $ad->getcategory->id }}">{{ $ad->getcategory->category_name }}</a>,

                                    </div><!-- End .product-cat -->


                                </div><!-- End .product-details-footer -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab"
                                role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab"
                                role="tab" aria-controls="product-info-tab" aria-selected="false">Advertiser Info</a>
                        </li>


                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel"
                            aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                                <h3>Product Description</h3>
                                <p>{{ $ad->description }}</p>



                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-info-tab" role="tabpanel"
                            aria-labelledby="product-info-link">
                            <div class="product-desc-content">
                                <h3>Information</h3>



                                <ul>
                                    <li>Name: {{ $ad->getUser->name }}</li>
                                    <li>Email: {{ $ad->getUser->email }}</li>
                                    <li>Phone: {{ $ad->getUser->phone ?? 'NA' }}</li>
                                    <li>Whatsapp: {{ $ad->getUser->whatsapp ?? 'NA' }}</li>

                                </ul>

                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->


                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab -->


                @if ($other_ads->count() > 0)
                <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

                    @foreach ($other_ads as $other_ad)
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
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
                        "1200": {
                            "items":4,
                            "nav": true,
                            "dots": false
                        }
                    }
                }'>


                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    {{-- <span class="product-label label-new">New</span> --}}
                                    <a href="{{ url('ads/view') . '/' . $other_ad->id }}">
                                        <img src="{{ asset($other_ad->cover_image) }}" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                to wishlist</span></a>

                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"
                                            title="Contact the Advertiser"><span>Contact
                                                Advertiser</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">{{ $other_ad->getcategory->category_name }}</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="{{{{url('ads/view') . "/". $other_ad->id}}}}">{{ $other_ad->title }}</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        ₦ {{ number_format($other_ad->price, 2) }}
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="">
                                            Negotioable:
                                        </div><!-- End .ratings -->
                                        {{ $other_ad->negotiable }}
                                    </div><!-- End .rating-container -->


                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                    @endforeach
                @endif




            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
