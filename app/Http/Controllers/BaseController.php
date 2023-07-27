<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdsCategory;


class BaseController extends Controller
{
    public function __construct()
    {
        $category_model = new AdsCategory();
        $categories = $category_model->with("adsSubCategory")->get();
        view()->share('categories', $categories);
    }
}
