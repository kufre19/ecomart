<?php

namespace App\Http\Controllers;

use App\Traits\HandleAdverts;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use HandleAdverts;
    
    public function ads_create_page()
    {
        return view("vendor.custom.user.ads_create");
    }
}
