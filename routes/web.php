<?php

declare(strict_types=1);

use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Orchid\Screens\Ads\AdsEditScreen;
use App\Orchid\Screens\Ads\AdsListScreen;
use App\Orchid\Screens\AdsCategories\CategoriesEdit;
use Illuminate\Support\Facades\Route;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\AdsCategories\CategoriesListScreen;
use App\Orchid\Screens\AdsCategories\SubCategoriesEditScreen;
use App\Orchid\Screens\AdsCategories\SubCategoriesListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Tabuna\Breadcrumbs\Trail;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::group(["middleware" => ["admin_auth"], "prefix" => "admin"], function () {
    Route::get("test", function () {
        return "sub domain";
    });




    // Main
    Route::screen('/dashboard', PlatformScreen::class)
        ->name('platform.main');

    // Platform > System > Ads 
    Route::screen("ads/list",AdsListScreen::class)->name("platform.ads.list");
    Route::screen("ads/edit/{advert?}",AdsEditScreen::class)->name("platform.ads.edit");



    // Platform > System > Ads > Categories > categories
    Route::screen("ads/categories/edit/{category?}", CategoriesEdit::class)->name("platform.ads.categories.edit");
    Route::screen("ads/categories", CategoriesListScreen::class)->name("platform.ads.categories");

    // Platform > System > Ads > SubCategories > subcategories
    Route::screen("ads/subcategories/list", SubCategoriesListScreen::class)->name("platform.ads.sub_categories.list");
    Route::screen("ads/subcategories/edit/{adsSubCategory?}", SubCategoriesEditScreen::class)->name("platform.ads.sub_categories.edit");


    


    

    // Platform > Profile
    Route::screen('profile', UserProfileScreen::class)
        ->name('platform.profile')
        ->breadcrumbs(function (Trail $trail) {
            return $trail
                ->parent('platform.index')
                ->push(__('Profile'), route('platform.profile'));
        });

    // Platform > System > Users
    Route::screen('users/{user}/edit', UserEditScreen::class)
        ->name('platform.systems.users.edit')
        ->breadcrumbs(function (Trail $trail, $user) {
            return $trail
                ->parent('platform.systems.users')
                ->push(__('User'), route('platform.systems.users.edit', $user));
        });

    // Platform > System > Users > Create
    Route::screen('users/create', UserEditScreen::class)
        ->name('platform.systems.users.create')
        ->breadcrumbs(function (Trail $trail) {
            return $trail
                ->parent('platform.systems.users')
                ->push(__('Create'), route('platform.systems.users.create'));
        });

    // Platform > System > Users > User
    Route::screen('users', UserListScreen::class)
        ->name('platform.systems.users')
        ->breadcrumbs(function (Trail $trail) {
            return $trail
                ->parent('platform.index')
                ->push(__('Users'), route('platform.systems.users'));
        });

    // Platform > System > Roles > Role
    Route::screen('roles/{role}/edit', RoleEditScreen::class)
        ->name('platform.systems.roles.edit')
        ->breadcrumbs(function (Trail $trail, $role) {
            return $trail
                ->parent('platform.systems.roles')
                ->push(__('Role'), route('platform.systems.roles.edit', $role));
        });

    // Platform > System > Roles > Create
    Route::screen('roles/create', RoleEditScreen::class)
        ->name('platform.systems.roles.create')
        ->breadcrumbs(function (Trail $trail) {
            return $trail
                ->parent('platform.systems.roles')
                ->push(__('Create'), route('platform.systems.roles.create'));
        });

    // Platform > System > Roles
    Route::screen('roles', RoleListScreen::class)
        ->name('platform.systems.roles')
        ->breadcrumbs(function (Trail $trail) {
            return $trail
                ->parent('platform.index')
                ->push(__('Roles'), route('platform.systems.roles'));
        });

    // Example...
    Route::screen('example', ExampleScreen::class)
        ->name('platform.example')
        ->breadcrumbs(function (Trail $trail) {
            return $trail
                ->parent('platform.index')
                ->push('Example screen');
        });

    Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
    Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
    Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
    Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
    Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
    Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

    //Route::screen('idea', 'Idea::class','platform.screens.idea');

});


/*
|--------------------------------------------------------------------------
| Other Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\WebController::class, "home"]);
Route::get('about-us', [App\Http\Controllers\WebController::class, "about_us"]);
Route::get('contact-us', [App\Http\Controllers\WebController::class, "contact_us"]);
Route::get('faqs', [App\Http\Controllers\WebController::class, "faqs"]);
Route::get('how-to-shop', [App\Http\Controllers\WebController::class, "how_to_shop"]);
Route::get('/privacy-policy', [App\Http\Controllers\WebController::class, "privacyPolicy"]);
Route::get('/terms-and-condition', [App\Http\Controllers\WebController::class, "toc"]);
Route::get('/delete-your-account', [App\Http\Controllers\WebController::class, "deleteAccount"]);






// LOGIN AND REG ROUTES
Route::get('login', [App\Http\Controllers\WebController::class, "login_page"])->name("login");
Route::get('forgot-password', [App\Http\Controllers\WebController::class, "forgot_pw_page"])->name("forgot.password");
Route::post('forgot-password', [App\Http\Controllers\WebController::class, "sendResetLinkEmail"]);
Route::get('reset-token', [App\Http\Controllers\WebController::class, "reset_token_page"])->name("reset.token");
Route::post('verify-token', [App\Http\Controllers\WebController::class, "verifyToken"]);
Route::get('reset-password', [App\Http\Controllers\WebController::class, "reset_pw_page"])->name("password.reset.form");
Route::post('reset-password', [App\Http\Controllers\WebController::class, "updatePassword"]);
Route::get('logout', [App\Http\Controllers\WebController::class, "logout"]);
Route::get('register', [App\Http\Controllers\WebController::class, "register_page"]);
Route::post('login', [App\Http\Controllers\WebController::class, "login"]);
Route::post('register', [App\Http\Controllers\WebController::class, "register"]);
Route::get('/auth/google/callback', [App\Http\Controllers\WebController::class, "googleAuthCallback"]);
Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::post('/auth/facebook/callback', [App\Http\Controllers\WebController::class, "facebookAuthCallback"]);
Route::get('/auth/facebook/complete-registration', [WebController::class,"complete_fb_reg"])->name("fb.complete.reg");
Route::get('/auth/facebook', [App\Http\Controllers\WebController::class, "facebookAuth"]);
// LOGIN AND REG ROUTES


// UNGUARDED ADS ROUTES
Route::get("ads/category/{id}",[WebController::class,"list_ads_by_category"]);
Route::get("ads/sub-category/{id}",[WebController::class,"list_ads_by_subcategory"]);
Route::get("ads/view/{id}",[WebController::class,"view_ad"]);
Route::get("ads/search",[WebController::class,"ads_search"]);



Route::group(["middleware" => "auth"], function () {

    Route::get("/dashboard", function () {
        return view("vendor.custom.user.dashboard");
    })->name("dashboard");

    Route::get('dashboard/wishlist', [App\Http\Controllers\UserController::class, "wishlist"])->name("dashboard.account.wishlist");
    Route::get('dashboard/account/contacts', [App\Http\Controllers\UserController::class, "wishlist"])->name("dashboard.account.contacts");
    Route::get('dashboard/account/settings', [App\Http\Controllers\UserController::class, "wishlist"])->name("dashboard.account.settings");




    // ADs ROUTES
    Route::get("/ads", [App\Http\Controllers\UserController::class, "list_user_ads_page"])->name("ads.list.page");
    Route::get("/ads/create", [App\Http\Controllers\UserController::class, "ads_create_page"])->name("ads.create.page");
    Route::post("/ads/create", [App\Http\Controllers\UserController::class, "create_ads"]);
    Route::get('/subcategories/{categoryId}', [UserController::class,"getSubcategories"]);

});

Route::any("test-page", function () {
    return view("vendor.custom.web.forget_password");
});
