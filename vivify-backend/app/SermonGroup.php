<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Sermon;

class SermonGroup extends Model
{
    //
    protected $appends = ['image_link',];

    public function sermons()
    {
        return $this->hasMany(Sermon::class);
    }

    public function getImageLinkAttribute()
    {
        return Storage::url($this->image);
    }
}
