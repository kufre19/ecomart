<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Screen\AsSource;

class AdsSubCategory extends Model
{
    use HasFactory, AsSource;
    public $exist = false;
    
    protected $fillable = [
        "ads_category_id",
        "sub_category_name",
        "image"

    ];


    public static function fetchAllSubCat()
    {
        $sub_cat = self::get();
        return $sub_cat;
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(AdsCategory::class,"ads_category_id");
    }
}
