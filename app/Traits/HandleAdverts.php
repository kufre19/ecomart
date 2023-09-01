<?php

namespace App\Traits;

use App\Models\Ads;
use App\Models\AdsCategory;
use App\Models\AdsImages;
use App\Models\AdsSubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

trait HandleAdverts
{

    public $AdsModel;
    public $AdsImageModel;



    public function list_user_ads_page()
    {
        // list all ads for a user
    }

    public function initAdsModel()
    {
        return $this->AdsModel = new Ads();
    }

    public function initAdsImageModel()
    {
        return $this->AdsImageModel = new AdsImages();
    }

    /**
     * to create the image url for and add 
     * @return array
     */

    public function createAdsImageUrl(): array
    {
        return [];
    }

    public function create_ads(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'location' => 'required|min:5',
            'user_email' => 'required',
            'user_phone' => 'required',
            'item_title' => 'required|min:3',
            'item_description' => 'required|min:8',
            'adsImages.*' => 'required|file|mimes:jpeg,png,gif|max:5120',
            'cover_image' => 'required|file|mimes:jpeg,png,gif|max:5120',

        ]);



        if ($validator->fails()) {
            // Handle validation errors
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validate the number of images
        if (count($request->file('adsImages')) > 6) {
            return redirect()->back()->withErrors(['adsImages' => 'Maximum 6 images are allowed.'])->withInput();
        }

        // Retrieve data from the request
        $category = $request->input('category');
        $subCategory = $request->input('sub_category');
        $location = $request->input('location');
        $condition = $request->input('condition');
        $manufacturerYear = $request->input('manufacturer_year');
        $title = $request->input('item_title');
        $description = $request->input('item_description');
        $price = $request->input('price');
        $user_phone = $request->input('user_phone');
        $user_email = $request->input('user_email');


        $user_id = Auth::user()->id;
        $life_cycle = time() + env("ADS_LIFE_CYCLE");
        $negotiate = $request->has('negotiable');
        $isNegotiable = ($negotiate == true) ? 'Yes' : 'No';

        // store_cover image
        $cover_image = $request->file("cover_image");
        $filename = time() . '.' . $cover_image->getClientOriginalExtension();
        $cover_image->storeAs('ads_images/cover_image', $filename, "public");
        $ads_cover_image_path = "storage/ads_images/cover_image/" . $filename;






        // create new ads model object
        $this->initAdsModel();

        // Store the data in the Ads model
        $ads = $this->AdsModel;
        $ads->category = $category;
        $ads->sub_category = $subCategory;
        $ads->location = $location;
        $ads->price = $price;
        $ads->condition = $condition;
        $ads->manufacturer_year = $manufacturerYear;
        $ads->title = $title;
        $ads->description = $description;
        $ads->negotiable = $isNegotiable;
        $ads->cover_image = $ads_cover_image_path;
        $ads->life_cycle = $life_cycle;
        $ads->user_id = $user_id;


        // Save the model instance to persist the data
        $ads_Stored = $ads->save();

        // update user info
        User::where("id", Auth::user()->id)->update([
            "email" => $user_email,
            "phone" => $user_phone
        ]);


        if ($ads_Stored) {
            // Handle uploaded images
            if ($request->hasFile('adsImages')) {

                $images = $request->file('adsImages');

                foreach ($images as $image) {
                    // Generate a unique filename with timestamp
                    $filename = time() . '.' . $image->getClientOriginalExtension();


                    // Store the image in the public/ads_images folder
                    $image->storeAs('ads_images', $filename, "public");
                    $ads_image_Stored = "storage/ads_images/" . $filename;

                    // dd("ol",$filename);

                    // Associate the image with the Ads model
                    // $ads->images()->create([
                    //     'filename' => $filename,
                    // ]);
                    $this->initAdsImageModel();
                    $ads_image_model = $this->AdsImageModel;
                    $ads_image_model->ads_id = $this->AdsModel->id;
                    $ads_image_model->ads_image = $ads_image_Stored;
                    $ads_image_model->save();
                }
            }
        }

        return redirect()->back();
    }

    public function getSubcategories($categoryId)
    {
        $subcategories = AdsSubCategory::where('ads_category_id', $categoryId)->get();
        return response()->json($subcategories);
    }

    public function ads_search(Request $request)
    {
        $ads_query = $request->input("ads_query");
        $category = $request->input('category') ?? "all";

        // $findAds = Ads::search($ads_query);
        $findAds = Ads::where('title', 'LIKE', '%' . $ads_query . '%');
        if($category != "all")
        {
            $findAds = $findAds->where("category",$category);
        }
        $findAds = $findAds->paginate(20);

        $ads = $findAds;
        $found = true;
        $category_model = new AdsCategory();
        // dd($ads);
      
        $category = $category_model->with("adsSubCategory")->first();

        return view("vendor.custom.web.list_ads", compact("ads","found","category"));
    }
}
