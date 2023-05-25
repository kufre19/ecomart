<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function home(Request $request)
    {

        return view("vendor.custom.web.home");
    }

    public function login_page()
    {
        return view("vendor.custom.web.login");

    }

}
