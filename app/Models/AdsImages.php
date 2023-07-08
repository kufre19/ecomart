<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdsImages extends Model
{
    use HasFactory;

    public  function advert(): BelongsTo
    {
        return $this->belongsTo(Ads::class,"ads_id");
    }
}
