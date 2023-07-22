<?php

use Illuminate\Support\Facades\Storage;

function storage_url($file)
{
    return Storage::url($file);
}