<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Devotion;
use App\Tag;
class Devotional extends Model
{
    //
    protected $appends = ['image_link', ];

    public function devotion()
    {
        return $this->belongsTo(Devotion::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function getImageLinkAttribute(){
        return Storage::url($this->image);
    }
}
