<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\AdsCategory;
use App\Models\AdsSubCategory;
use App\Models\User;
use App\Traits\HandleAdverts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class WebController extends BaseController
{

    use HandleAdverts;
    
    public function __construct()
    {
        parent::__construct();
    }

    public function home(Request $request)
    {


        return view("vendor.custom.web.home");
    }

    public function view_ad($id)
    {
        $ads_model = new Ads();
        $ad = $ads_model->where("id", $id)->where("status", "approved")->with("adsImage", "getcategory", "getUser")->first();

        if ($ad) {
            $other_ads  = $ads_model->where("id", "!=", $ad->id)->where("category", $ad->getcategory->id)->where("status", "approved")->with("adsImage", "getcategory")->paginate(8);

            return view("vendor.custom.web.view-ad", compact("ad", "other_ads"));
        } else {

            // tried getting ads that id is not found
            return redirect()->back();
        }
    }

    public function list_ads_by_category($cat)
    {
        $category_model = new AdsCategory();
        $ads_model = new Ads();

        $category = $category_model->with("adsSubCategory")->first();
        if ($category) {

            $ads = $ads_model->where("category", $cat)->where("status", "approved")->with("adsImage")->orderBy('created_at', 'DESC')->paginate(20);
            if ($ads->count() > 0) {
                $found = true;
            } else {
                // return only 20 first ads as none in category is found
                $found = false;
                $ads = $ads_model->where("status", "approved")->with("adsImage", "getcategory")->orderBy('created_at', 'DESC')->paginate(20);
            }

            return view("vendor.custom.web.list_ads", compact("ads", "category", "found"));
        } else {
            // tried wrong category
            return redirect()->back();
        }
    }

    public function list_ads_by_subcategory($subcat)
    {
        $subcategory_model = new AdsSubCategory();
        $ads_model = new Ads();

        $subcategory = $subcategory_model->with("category")->first();
        if ($subcategory) {
            $category = $subcategory->category;

            $ads = $ads_model->where("sub_category", $subcat)->where("status", "approved")->with("adsImage")->orderBy('created_at', 'DESC')->paginate(20);
            if ($ads->count() > 0) {
                $found = true;
            } else {
                // return only 20 first ads as none in category is found
                $found = false;
                $ads = $ads_model->where("status", "approved")->with("adsImage", "getcategory")->orderBy('created_at', 'DESC')->paginate(20);
            }

            return view("vendor.custom.web.list_ads", compact("ads", "category", "found", "subcategory"));
        } else {
            // tried wrong category
            return redirect()->back();
        }
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
            'phone' => 'required|min:10',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
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

    public function forgot_pw_page()
    {
        return view("vendor.custom.web.forget_password");
    }

    public function sendResetLinkEmail(Request $request)
    {
        // Validate the email input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);



        // $token = Str::random(60);
        $token = Str::substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 12);


        // Store the reset token in the database
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now()
        ]);

        // Now send the token to the user's email (using a simple Laravel mailable or basic email for this example)
        $text = <<<MSG
        You've requested a password reset on your ecomart.ng account, please find below here reset token,
        Token: $token

        please if you did not request for a password reset contact our technical support below <support@ecomart.ng>
        MSG;
        Mail::raw($text, function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Your Password Reset Token');
        });

        return redirect()->to(route("reset.token", ['email' => $request->email]));
    }

    public function reset_token_page()
    {
        return view("vendor.custom.web.reset_pw_token");
    }

    public function verifyToken(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email'
        ]);

        // Check if the token exists and is valid (e.g., not expired)
        $tokenData = DB::table('password_resets')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$tokenData) {
            return redirect()->back()->withErrors(['token' => 'This token is invalid']);
        }

        // Check if token is expired. Assuming it's valid for 60 minutes.
        if (Carbon::parse($tokenData->created_at)->addMinutes(60)->isPast()) {
            DB::table('password_resets')->where('email', $request->email)->delete();
            return redirect()->back()->withErrors(['token' => 'This token has expired']);
        }

        // Token is valid. Redirect to reset password form.
        session()->put("email",$request->email);
        return redirect()->route('password.reset.form');
    }

    public function reset_pw_page()
    {
        return view("vendor.custom.web.reset_password");

    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8'
        ]);

        // Find the user and update their password
        $user = User::where('email',session()->get("email"))->first();
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();

            // Delete the token as it's been used
            DB::table('password_resets')->where('email', $user->email)->delete();
            session()->forget("email");

            return redirect()->route('login')->with('status', 'Password has been reset');
        }

        return redirect()->route('login')->withErrors(['email' => 'Could not reset the password.']);
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

            if ($attempt_login) {
                return redirect()->intended('/dashboard');
            } else {
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
        session()->put("name", $name);
        session()->put("id", $id);



        // Find or create the user based on the email
        $existingUser = User::where('fb_id', $id)->first();

        if ($existingUser) {
            $password = $id . $name;
            $attempt_login = Auth::attempt(['fb_id' => $id, 'password' => $password]);

            if ($attempt_login) {

                $email =  Auth::user()->email;
                $phone =  Auth::user()->phone;


                session()->put("email", $email);
                session()->put("phone", $phone);

                if (session()->get("phone") == "" || session()->get("email") == "") {
                    return redirect()->to(route("fb.complete.reg"));
                }

                return redirect()->to("dashboard");
            } else {

                return redirect()->back()->withErrors([
                    'email' => 'An error occured please try again!',
                ]);
            }
        } else {
            $password = $id . $name;

            $email = $request->input("email");
            $phone = $request->input("phone");


            session()->put("email", $email);
            session()->put("phone", $phone);


            if (session()->get("phone") == "" || session()->get("email") == "") {

                return redirect()->to(route("fb.complete.reg"));
            }

            $newUser = User::create([
                'name' => $name,
                'email' => $email,
                "phone" => $phone,
                "fb_id" => $id,
                'password' => Hash::make($password), // Set a temporary password or generate a random password
            ]);
            $attempt_login = Auth::attempt(['fb_id' => $id, 'password' => $password]);
            return redirect()->to("dashboard");
        }
    }

    public function facebookAuth()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function complete_fb_reg()
    {
        return view("vendor.custom.web.complete-fb-reg");
    }

    public function contact_us()
    {
        return "contact us page";
    }

    public function faqs()
    {
        return "faqs page";
    }

    public function privacyPolicy()
    {
        return view("vendor.custom.web.privacy-policy");

    }
    public function toc()
    {
        return view("vendor.custom.web.toc");

    }

    public function deleteAccount()
    {
        return view("vendor.custom.web.delete-your-account");

    }
}

