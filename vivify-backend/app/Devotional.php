<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Devotion;
use App\Tag;
class Devotional extends Model
{
    //
    public function devotion()
    {
        return $this->belongsTo(Devotion::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
