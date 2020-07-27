<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class GalleryPicture extends Model
{
    //
    protected $appends = ['image_link', ];

    public function getImageLinkAttribute(){
        return Storage::url($this->image);
    }

}
