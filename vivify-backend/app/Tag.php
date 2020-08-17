<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;

class Tag extends Model
{
    //
    public function blogs()
    {
        return $this->morphedByMany(Blog::class, 'taggable');
    }
}
