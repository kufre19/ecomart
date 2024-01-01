@extends('vendor.custom.layouts.app')

@section('main-content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Deletion of Account<span>Pages</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        {{-- <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
            </ol>
        </div> --}}
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            
            <h2 class="title text-center mb-3">Instructions</h2><!-- End .title -->
            <div class="accordion accordion-rounded" id="accordion-2">
                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading2-1">
                        <h2 class="card-title">
                            <a class="collapsed" role="button"  href="#" aria-expanded="false" aria-controls="collapse2-1">
                                Follow the Instructions below to delete your data from our platform
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse2-1" class="collapse show" aria-labelledby="heading2-1" data-parent="#accordion-2">
                        <div class="card-body">
                           
                            <p>
                               For any reason you want to stop making use of our service and would like to take 
                               away any data you've shared on our platform you can do so by request an account
                               deletion by following the steps below

                                <h4>
                                   Steps

                                </h4>
                                <ul>
                                    <li>Log into your account.</li>
                                    <li>Go to the settings section from the sidebar navigation of your dashboard</li>
                                    <li>at the end of the settings page you'll find the "delete my account button"</li>
                                    <li>you will be given a set of question to why you want to stop using our service answering them are optional</li>
                                    <li>click on confirm from the follow pop up and your request will be sent</li>
                                    <li>the process will take 5 minutes to an hour to complete after that all of your data on our platorm will be completely deleted</li>
                                    
                                </ul>                                
                            </p>

                        </div><!-- End .card-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

             
            </div><!-- End .accordion -->

           
        </div><!-- End .container -->
    </div><!-- End .page-content -->

    {{-- <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-7.jpg);">
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
    </div> --}}
</main><!-- End .main -->

@endsection