@extends('vendor.custom.layouts.dashboard.app')

@section('main-content')
    <div class="col-md-9 col-lg-7">
        <div class="text-center">
            <h2 class="title mb-1">Post an Advert</h2><!-- End .title mb-2 -->
            {{-- <p class="lead text-primary">
                We collaborate with ambitious retailers and business people, we’d love to see your product sell!
            </p><!-- End .lead text-primary --> --}}

            <a href="{{ url('ads') }}" class="btn btn-primary btn-minwidth-sm">
                <span>My Adverts</span>
            </a>
        </div><!-- End .text-center -->

        <form action="{{ url('ads/create') }}" method="POST" class="contact-form mb-2" enctype="multipart/form-data">
           
            @csrf
            <div class="form-group mb-2">
                <label for="category">Select Category</label>
                <select name="category" class="form-control" id="category" required>
                    <option value="">Select Category</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
               

            </div>

            <div class="form-group mb-2">
                <label for="subcategory">Choose a sub-category:</label>
                <select name="sub_category" class="form-control" id="subcategory" required>
                    <option value="">Select Subcategory</option>
                   
                </select>
            </div>

            <div class="form-group mb-2">
                <label for="myInput">Enter Item Location:</label>
                <input list="ecomart-location" type="text" name="location" class="form-control" id="myInputmap"
                    placeholder="enter location" required>

                <datalist id="ecomart-location">
                    <option value="Lagos"></option>
                </datalist>
            </div>

            <div class="form-group mb-2">
                <label for="myInput">Condition:</label>
                <input list="ecomart-condition" type="text" name="condition" class="form-control" id="myInputstate"
                    placeholder="item Condition" required>

                <datalist id="ecomart-condition">
                    <option value="New"></option>
                    <option value="Second Grade"></option>
                </datalist>
            </div>

            <div class="form-group mb-2">
                <label for="myInputyear">Year of Manufacture:</label>
                <input type="date" name="manufacturer_year" class="form-control" id="myInputyear"
                    aria-describedby="emailHelp" placeholder="item year" required>


            </div>

            <div class="form-group mb-2">
                <label for="price1">Price of Item in Naira:</label>
                <input type="text" name="price" class="form-control" id="price1"
                    aria-describedby="emailHelp" placeholder="Enter Item Price In Naira"
                    inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
            </div>

            <div class="form-group mb-2">
                <label for="coverimage">Ad Cover Image</label>
                <input type="file" name="cover_image" class="form-control-file" id="coverimage"
                    accept="image/jpeg, image/png, image/gif"  required>
            </div>

            <div class="form-group mb-2">
                <label for="imageUpload">Item Images</label>
                <input type="file" name="adsImages[]" class="form-control-file" id="imageUpload"
                    accept="image/jpeg, image/png, image/gif" multiple required>
            </div>


            <label for="ptitle" class="sr-only">Title</label>
            <input type="text" name="item_title" class="form-control" id="ptitle" placeholder="Title " required>
            <br>

            <label for="p_description" class="sr-only">Description</label>
            <textarea class="form-control" name="item_description" cols="30" rows="4" id="p_description" required
                placeholder="Description *"></textarea>
            <br>
            

            <label for="uname" class="sr-only">Name</label>
            <input type="text" class="form-control" id="uname"  value="{{Auth::user()->name}}" disabled>
            <br> 

            <label for="ueamil" class="sr-only">Email</label>
            <input type="email" name="user_email" class="form-control" id="email" value="{{ Auth::user()->email ?: 'please enter your email' }}" {{ empty(Auth::user()->email) ? 'required' : 'disabled' }}>

            <br> 

            <label for="uphone" class="sr-only">Phone/Whatsapp</label>
            <input type="text" name="user_phone" class="form-control" id="uphone" 
            value="{{ Auth::user()->phone ?: 'please enter your phone' }}" {{ empty(Auth::user()->phone) ? 'required' : 'disabled' }}>
        
            <br>

            <label for="negotiable">
                <input type="checkbox" id="negotiable" name="negotiable" value="Yes">
                Negotiable
            </label>
            <br>

            <div class="text-center">
                <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                    <span>POST ADVERT</span>
                    <i class="icon-long-arrow-right"></i>
                </button>
            </div><!-- End .text-center -->
        </form><!-- End .contact-form -->
    </div><!-- End .col-md-9 col-lg-7 -->
@endsection


@section('extra_script')
<script>
    $('#category').on('change', function() {
        var categoryId = $(this).val();

        if (categoryId) {
            $.ajax({
                url: '/subcategories/' + categoryId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#subcategory').empty();
                    $.each(data, function(key, value) {
                        $('#subcategory').append('<option value="' + value.id + '">' + value.sub_category_name + '</option>');
                    });
                }
            });
        } else {
            $('#subcategory').empty();
        }
    });
</script>

@endsection