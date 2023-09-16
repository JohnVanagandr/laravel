<?php
namespace App\Models\Traits\Accessors;

use Illuminate\Support\Facades\Storage;

trait AvatarAccessors
{

    function getUrlPathAttribute()
    {
        $path = Storage::disk($this->disk)->url($this->path);
        $url = asset( $path );
        return $url;
    }
}
