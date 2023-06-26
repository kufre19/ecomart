@extends('vendor.custom.layouts.dashboard.app')

@section('main-content')



<div class="col-md-8 col-lg-9">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel"
            aria-labelledby="tab-dashboard-link">
            <p>Hello <span class="font-weight-normal text-dark">{{Auth::user()->name ?? "User"}}</span> (not <span
                    class="font-weight-normal text-dark">{{Auth::user()->name ?? "User"}}</span>? <a
                    href="{{url('logout')}}">Log out</a>)
                <br>
                From your account dashboard you can view your <a href="#tab-orders"
                    class="tab-trigger-link link-underline">Ads</a>, manage your
                <a href="#tab-address" class="tab-trigger-link">contacts and Ads</a>, and <a href="#tab-account"
                    class="tab-trigger-link">edit your password and account details</a>.
            </p>
        </div><!-- .End .tab-pane -->

        <div class="tab-pane fade" id="tab-orders" role="tabpanel"
            aria-labelledby="tab-orders-link">

            <ul class="nav nav-pills" id="tabs-5" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab-22-tab" data-toggle="tab"
                        href="#tab-22" role="tab" aria-controls="tab-22"
                        aria-selected="true">pending orders(<span>0</span>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-23-tab" data-toggle="tab" href="#tab-23"
                        role="tab" aria-controls="tab-23"
                        aria-selected="false">Closed orders(<span>0</span>)</a>
                </li>
            </ul>
            <div class="tab-content" id="tab-content-5">
                <div class="tab-pane fade show active" id="tab-22" role="tabpanel"
                    aria-labelledby="tab-22-tab">
                    <p>No order has been made yet.</p>
                    <a href="category.html" class="btn btn-outline-primary-2"><span>GO
                            SHOP</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="tab-23" role="tabpanel"
                    aria-labelledby="tab-23-tab">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon">
                                <i class="icon-info-circle"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quisque a lectus</h3>
                                <!-- End .icon-box-title -->
                                <p>Sed egestas, ante et vulputate volutpat, eros pede semper
                                    est, vitae luctus metus libero eu augue.</p>
                                <a href="category.html"
                                    class="btn btn-outline-primary-2"><span>GO
                                        SHOP</span><i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- .End .tab-pane -->

        <div class="tab-pane fade" id="tab-adverts" role="tabpanel"
            aria-labelledby="tab-adverts-link">

            <ul class="nav nav-pills" id="tabs-5" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab-17-tab" data-toggle="tab"
                        href="#tab-17" role="tab" aria-controls="tab-17"
                        aria-selected="true">Active(<span>0</span>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-18-tab" data-toggle="tab" href="#tab-18"
                        role="tab" aria-controls="tab-18"
                        aria-selected="false">Reviewing(<span>0</span>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-19-tab" data-toggle="tab" href="#tab-19"
                        role="tab" aria-controls="tab-19"
                        aria-selected="false">Declined(<span>0</span>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-20-tab" data-toggle="tab" href="#tab-20"
                        role="tab" aria-controls="tab-20"
                        aria-selected="false">Draft(<span>0</span>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-20-tab" data-toggle="tab" href="#tab-20"
                        role="tab" aria-controls="tab-20"
                        aria-selected="false">Closed(<span>0</span>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-21-tab" data-toggle="tab" href="#tab-21"
                        role="tab" aria-controls="tab-21"
                        aria-selected="false">All(<span>0</span>)</a>
                </li>
            </ul>
            <div class="tab-content" id="tab-content-5">
                <div class="tab-pane fade show active" id="tab-17" role="tabpanel"
                    aria-labelledby="tab-17-tab">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon">
                                <i class="icon-info-circle"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quisque a lectus</h3>
                                <!-- End .icon-box-title -->
                                <p>Sed egestas, ante et vulputate volutpat, eros pede semper
                                    est, vitae luctus metus libero eu augue.</p>
                                <a href="#"
                                    class="btn btn-outline-primary-2"><span>POST
                                        AD</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="tab-18" role="tabpanel"
                    aria-labelledby="tab-18-tab">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon">
                                <i class="icon-info-circle"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quisque a lectus</h3>
                                <!-- End .icon-box-title -->
                                <p>Sed egestas, ante et vulputate volutpat, eros pede semper
                                    est, vitae luctus metus libero eu augue.</p>
                                <a href="#"
                                    class="btn btn-outline-primary-2"><span>POST
                                        AD</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="tab-19" role="tabpanel"
                    aria-labelledby="tab-19-tab">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon">
                                <i class="icon-info-circle"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quisque a lectus</h3>
                                <!-- End .icon-box-title -->
                                <p>Sed egestas, ante et vulputate volutpat, eros pede semper
                                    est, vitae luctus metus libero eu augue.</p>
                                <a href="#"
                                    class="btn btn-outline-primary-2"><span>POST
                                        AD</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="tab-20" role="tabpanel"
                    aria-labelledby="tab-20-tab">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon">
                                <i class="icon-info-circle"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quisque a lectus</h3>
                                <!-- End .icon-box-title -->
                                <p>Sed egestas, ante et vulputate volutpat, eros pede semper
                                    est, vitae luctus metus libero eu augue.</p>
                                <a href="#"
                                    class="btn btn-outline-primary-2"><span>POST
                                        AD</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="tab-21" role="tabpanel"
                    aria-labelledby="tab-21-tab">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon">
                                <i class="icon-info-circle"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quisque a lectus</h3>
                                <!-- End .icon-box-title -->
                                <p>Sed egestas, ante et vulputate volutpat, eros pede semper
                                    est, vitae luctus metus libero eu augue.</p>
                                <a href="#"
                                    class="btn btn-outline-primary-2"><span>POST
                                        AD</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- .End .tab-pane -->

        <div class="tab-pane fade" id="tab-address" role="tabpanel"
            aria-labelledby="tab-address-link">
            <p>The following addresses will be used on the checkout page by default.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-dashboard">
                        <div class="card-body">
                            <h3 class="card-title">Billing Address</h3>
                            <!-- End .card-title -->

                            <p>User Name<br>
                                <!--data will come from checkout page per user-->
                                User Company<br>
                                John str<br>
                                New York, NY 10001<br>
                                1-234-987-6543<br>
                                yourmail@mail.com<br>
                                <a href="#">Edit <i class="icon-edit"></i></a>
                            </p>
                        </div><!-- End .card-body -->
                    </div><!-- End .card-dashboard -->
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <div class="card card-dashboard">
                        <div class="card-body">
                            <h3 class="card-title">Shipping Address</h3>
                            <!-- End .card-title -->

                            <p>You have not set up this type of address yet.<br>
                                <a href="#">Edit <i class="icon-edit"></i></a>
                            </p>
                        </div><!-- End .card-body -->
                    </div><!-- End .card-dashboard -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- .End .tab-pane -->

        <div class="tab-pane fade" id="tab-account" role="tabpanel"
            aria-labelledby="tab-account-link">
            <form action="#">
                <div class="row">
                    <div class="col-sm-6">
                        <label>First Name *</label>
                        <input type="text" class="form-control" required>
                    </div><!-- End .col-sm-6 -->

                    <div class="col-sm-6">
                        <label>Last Name *</label>
                        <input type="text" class="form-control" required>
                    </div><!-- End .col-sm-6 -->
                </div><!-- End .row -->

                <label>Display Name *</label>
                <input type="text" class="form-control" required>
                <small class="form-text">This will be how your name will be displayed in
                    the account section and in reviews</small>

                <label>Email address *</label>
                <input type="email" class="form-control" required>

                <label>Current password (leave blank to leave unchanged)</label>
                <input type="password" class="form-control">

                <label>New password (leave blank to leave unchanged)</label>
                <input type="password" class="form-control">

                <label>Confirm new password</label>
                <input type="password" class="form-control mb-2">

                <button type="submit" class="btn btn-outline-primary-2">
                    <span>SAVE CHANGES</span>
                    <i class="icon-long-arrow-right"></i>
                </button>
            </form>
        </div><!-- .End .tab-pane -->
    </div>
</div><!-- End .col-lg-9 -->
@endsection