<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Orchid\Screen\AsSource;

class AdsCategory extends Model
{
    use HasFactory, AsSource;
    public $exist = false;

    public function fetchCategory(Request $request)
    {
        $category = self::where("id",$request->input("id"))->orWhere("category_name",$request->input("category_name"))->first();
        if($category)
        {
            $this->exist = true;
            return $category;
        }

        return false;
    }

    public static function fetchAllCategoties()
    {
        $categories = self::get();
        return $categories;
    }

    public function adsSubCategory(): HasMany
    {
        return $this->hasMany(AdsSubCategory::class);
    }
}
