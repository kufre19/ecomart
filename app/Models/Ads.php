<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Screen\AsSource;

class Ads extends Model
{
    use HasFactory, AsSource;
    public const PENDING="pending";
    public const ACTIVE="active";
    public const PAUSED="paused";




    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,"user_id");
    }

    public function adsImage(): HasMany
    {
        return $this->hasMany(AdsImages::class,"ads_id");

    }

    public function fetchAllPendingAds(): Collection
    {
        return self::where("status",self::PENDING)->get();

    }

    public function fetchAllAds(): Collection
    {
        return self::latest()->get();

    }

}