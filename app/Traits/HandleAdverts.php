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
            'adsImages.*' => 'required|file|mimes:jpeg,png,gif|max:5120',
        ]);



        if ($validator->fails()) {
            // Handle validation errors
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validate the number of images
        if (count($request->file('adsImages')) > 4) {
            return redirect()->back()->withErrors(['adsImages' => 'Maximum 4 images are allowed.'])->withInput();
        }

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
        $ads_Stored = $ads->save();
       

        if ($ads_Stored) {
            // Handle uploaded images
            if ($request->hasFile('adsImages')) {
               
                $images = $request->file('adsImages');

                foreach ($images as $image) {
                    // Generate a unique filename with timestamp
                    $filename = time() . '_' . $image->getClientOriginalName();
                    

                    // Store the image in the public/ads_images folder
                    $ads_image_Stored = $image->storeAs('public/ads_images', $filename);
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
}
