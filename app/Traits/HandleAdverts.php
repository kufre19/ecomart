<?php

namespace App\Traits;

use App\Models\Ads;
use App\Models\AdsImages;
use Illuminate\Http\Request;
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
        $this->AdsModel = new Ads();
    }

    public function initAdsImageModel()
    {
        $this->AdsImageModel = new AdsImages();
    }

    public function create_ads(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'location' => 'required|min:5',
            'item_title' => 'required|min:3',
            'item_description' => 'required|min:8',
            'imageUpload.*' => 'required|file|mimes:jpeg,png,gif|max:5120', 
        ]);

        

        if ($validator->fails()) {
            // Handle validation errors
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // // Validate the number of images
        // if (count($request->file('imageUpload')) > 4) {
        //     return redirect()->back()->withErrors(['imageUpload' => 'Maximum 4 images are allowed.'])->withInput();
        // }

        // Retrieve data from the request
        $category = $request->input('category');
        $subCategory = $request->input('sub_category');
        $location = $request->input('location');
        $condition = $request->input('condition');
        $manufacturerYear = $request->input('manufacturer_year');
        $title = $request->input('item_title');
        $description = $request->input('item_description');
        $negotiate = $request->has('negotiable');
        $isNegotiable = ($negotiate == true) ? 'Yes' : 'No';



        $this->initAdsImageModel();
        $this->initAdsModel();

        // Store the data in the Ads model
        $ads = $this->AdsModel;
        $ads->category = $category;
        $ads->sub_category = $subCategory;
        $ads->location = $location;
        $ads->condition = $condition;
        $ads->manufacturer_year = $manufacturerYear;
        $ads->title = $title;
        $ads->description = $description;
        $ads->negotiable = $isNegotiable;

        // Save the model instance to persist the data
        $ads->save();

        // Handle uploaded images
        // if ($request->hasFile('imageUpload')) {
        //     $images = $request->file('imageUpload');
            
        //     foreach ($images as $image) {
        //         // Process and store each image as desired
        //         $filename = $image->store('images');
                
        //         // Associate the image with the Ads model
        //         $ads->images()->create([
        //             'filename' => $filename,
        //         ]);
        //     }
        // }
        return redirect()->back();
    }
}
