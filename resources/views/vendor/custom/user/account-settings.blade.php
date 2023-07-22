@extends('vendor.custom.layouts.dashboard.app')

@section('extra-styling')
   
@endsection

@section('main-content')
    <div class="col-md-9 col-lg-7">
        <div class="text-center ">
            <h2 class="title mb-1">Update Account Information</h2><!-- End .title mb-2 -->
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
                <small class="form-text">This will be how your name will be displayed in the account section and in reviews</small>

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
        </div><!-- End .text-center -->



    </div><!-- End .col-md-9 col-lg-7 -->
@endsection
