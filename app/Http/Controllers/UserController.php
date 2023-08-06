<?php

namespace App\Http\Controllers;

use App\Models\AdsCategory;
use App\Models\AdsSubCategory;
use App\Traits\HandleAdverts;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    use HandleAdverts;
    
    public function ads_create_page(): View
    {
        $categories = AdsCategory::fetchAllCategoties();
       
        
        return view("vendor.custom.user.ads_create",compact("categories"));
    }
}
