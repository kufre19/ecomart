@extends('vendor.custom.layouts.app')

@section('main-content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Privacy Policy<span>Pages</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        {{-- <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
            </ol>
        </div><!-- End .container --> --}}
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <h2 class="title text-center mb-3">Our Privacy-Policy</h2><!-- End .title -->
            <div class="accordion accordion-rounded" id="accordion-1">
                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading-1">
                        <h2 class="card-title">
                            <a role="button"  href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                               Please Read through Ecomart's privacy-policy to enable get the best out this platform
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-1">
                        <div class="card-body">
                            EcoMart recognize the importance of online privacy and we are committed in an appropriate manner for the security of our Users information. 
                            We do not Sell, exchange, or release your personal information at your back. Informations collected from you when registering  are solely for:
                            *The purpose of creating your  user account before you can be able to post your products and services to enable customers reach out to you directly on your  provided contact.
                            To keep track of your advertisement,Handle inquiries and complains by our Resources Administrator. 
                        </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

               
            </div><!-- End .accordion -->

           
        </div><!-- End .container -->
    </div><!-- End .page-content -->

    <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-7.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-7">
                    <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                        <div class="col">
                            <h3 class="cta-title text-white">If You Have More Questions</h3><!-- End .cta-title -->
                            <p class="cta-desc text-white">Quisque volutpat mattis eros</p><!-- End .cta-desc -->
                        </div><!-- End .col -->

                        <div class="col-auto">
                            <a href="contact.html" class="btn btn-outline-white"><span>CONTACT US</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .col-auto -->
                    </div><!-- End .row no-gutters -->
                </div><!-- End .col-md-10 col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cta -->
</main><!-- End .main -->

@endsection