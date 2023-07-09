@extends('vendor.custom.layouts.dashboard.app')

@section('extra-styling')
    <style>
        .card {
            max-width: 300px;
            margin-bottom: 20px;
        }

        .edit-icon {
            color: blue;
        }

        .status {
            font-weight: bold;
        }

        .card-img-top {
            height: 200px;
            /* Set a fixed height for the image */
            object-fit: cover;
            /* Maintain aspect ratio and cover the container */
        }
    </style>
@endsection

@section('main-content')
    <div class="col-md-9 col-lg-7">
        <div class="text-center ">
            <h2 class="title mb-1">My Ads</h2><!-- End .title mb-2 -->
            {{-- <p class="lead text-primary">
                We collaborate with ambitious retailers and business people, we’d love to see your product sell!
            </p><!-- End .lead text-primary --> --}}

            <a href="{{ url('advert') }}" class="btn btn-primary btn-minwidth-sm mb-1">
                <span>Post an Advert</span>
            </a>

            <div class="row  row-cols-md-12">
                <div class="col-lg-4   mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="Item Image">
                        <div class="card-body">
                            <h5 class="card-title">Item Title</h5>
                            <p class="card-text">Status: <span class="status">Active</span></p>
                            <a href="#" class="edit-icon"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Add more card elements here -->
            </div>
        </div><!-- End .text-center -->



    </div><!-- End .col-md-9 col-lg-7 -->
@endsection
