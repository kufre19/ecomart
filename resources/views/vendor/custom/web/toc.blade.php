@extends('vendor.custom.layouts.app')

@section('main-content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">TERMS OF SERVICES AND CONDITION OF USE<span>Pages</span></h1>
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
            <h2 class="title text-center mb-3">TERMS OF SERVICES</h2>
            <div class="accordion accordion-rounded" id="accordion-1">
                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading-1">
                        <h2 class="card-title">
                            <a role="button"  href="#" aria-expanded="true" aria-controls="collapse-1">
                                Our term of service is as follow:
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-1">
                        <div class="card-body">
                            EcoMart  only provide an e-commerce  marketplace  for Buyers and Sellers to meet. Sellers  post advertisement of goods and services to a wider audience for Buyers to contact them directly.
                            All transactions are concluded directly between Seller/Buyer and as such we are  not  part of the transaction, neither do we have any control, nor bears any responsibility with regard to any party in relation to such a transaction.
                        </div>
                    </div><!-- End .collapse -->
                </div><!-- End .card -->

              
            </div><!-- End .accordion -->

            <h2 class="title text-center mb-3">TERMS AND CONDITIONS OF USE</h2><!-- End .title -->
            <div class="accordion accordion-rounded" id="accordion-2">
                <div class="card card-box card-sm bg-light">
                    <div class="card-header" id="heading2-1">
                        <h2 class="card-title">
                            <a class="collapsed" role="button"  href="#" aria-expanded="false" aria-controls="collapse2-1">
                                Our terms and confiton of use is as follow
                            </a>
                        </h2>
                    </div><!-- End .card-header -->
                    <div id="collapse2-1" class="collapse" aria-labelledby="heading2-1" data-parent="#accordion-2">
                        <div class="card-body">
                            <p>
                                For Sellers  who intend to have a quicker sales by reach out to an entire wider audience and be at the Top of buyers search 
                                options should choice  "Quicker sale Option".
                                We hereby advise our Users to remove their post ads and If possible replaced with a new one, once a particular products is been sold or rented  
                                out as per houses and apartments for let.If such post are not removed ,customers will keep calling you for already sold or rented item's or apartment.
                            </p>
                            <p>
                                To safeguard our Users  from  the criminal activities of  IMPOSTERS, FRAUDSTERS and SCAMMERS,below are  compulsory  safety hints  to abide with :

                                <h4>
                                    COMPULSARY SAFETY HINTS

                                </h4>
                                <ul>
                                    <li>Do not buy goods that are too cheap.</li>
                                    <li>Do not pay in advance for goods.</li>
                                    <li>Do not pay in advance for delivery.</li>
                                    <li>Meet only in a safe location in public.</li>
                                    <li>Before buying, check the item to be sure.</li>
                                    <li>Pay only after collecting the items.</li>
                                    <li>Get a purchase invoice or receipt.</li>
                                    <li>For houses & apartments for let, confirm the agent or landlord and apartment first before rent payment.</li>
                                    <li>Report any abuse of users to us.</li>
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