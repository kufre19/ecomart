<?php

namespace App\Http\Controllers;

use App\Models\AdsCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class WebController extends Controller
{

    public function home(Request $request)
    {   
        $category_model = new AdsCategory();
        $categories = $category_model->with("adsSubCategory")->get(); 
        return view("vendor.custom.web.home",compact("categories"));
    }

    public function login_page()
    {
        return view("vendor.custom.web.login");

    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }

    public function register_page()
    {
        return view("vendor.custom.web.login");

    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/dashboard');
        } else {
            // Invalid credentials
     
            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        if ($user) {
           Auth::login($user);
           return redirect()->intended('/dashboard');
        } else {
            // Failed to create a new user
            return redirect()->back()->withErrors([
                'registration_error' => 'Failed to register the user. Please try again.',
            ]);
        }


        
    }

    public function googleAuthCallback(Request $request)
    {
        $user = Socialite::driver('google')->user();
        

        // Find or create the user based on the email
        $existingUser = User::where('email', $user->email)->first();
        // dd($user);
        if ($existingUser) {
            $password = $user->id;
            $attempt_login = Auth::attempt(['email' => $user->email, 'password' => $password]);
          
           if( $attempt_login)
           {
            return redirect()->intended('/dashboard');

           }else{
            return redirect()->back()->withErrors([
                'email' => 'An error occured please try again!',
            ]);
           }
            
        } else {
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make($user->id), // Set a temporary password or generate a random password
            ]);
            Auth::login($newUser);
           return redirect()->intended('/dashboard');

        }

    }

    public function facebookAuthCallback(Request $request)
    {
        
        $name = $request->input("name");
        $id = $request->input("userID");

         // Find or create the user based on the email
         $existingUser = User::where('email', $id)->first();
         
         if ($existingUser) {
             $password = $id . $name;
             $attempt_login = Auth::attempt(['email' => $id, 'password' => $password]);
           
            if( $attempt_login)
            {
             return response("ok");
 
            }else{
             return redirect()->back()->withErrors([
                 'email' => 'An error occured please try again!',
             ]);
            }
             
         } else {
            $password = $id . $name;
             $newUser = User::create([
                 'name' => $name,
                 'email' => $id,
                 'password' => Hash::make($password), // Set a temporary password or generate a random password
             ]);
             $attempt_login = Auth::attempt(['email' => $id, 'password' => $password]);
             return response("ok");
 
         }
    }

    public function facebookAuth()
    {
        return Socialite::driver('facebook')->redirect();
    }



}
