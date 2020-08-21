<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use App\Devotional;
class Devotion extends Model
{
    //
    protected $appends = ['image_link', ];

    public function devotionals()
    {
        return $this->hasMany(Devotional::class);
    }

    public function getImageLinkAttribute(){
        return Storage::url($this->image);
    }
}
