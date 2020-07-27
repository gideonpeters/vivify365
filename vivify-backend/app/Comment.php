<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Blog;
class Comment extends Model
{
    //
    public function comment(){
        return $this->belongsTo(Comment::class);
    }

    public function blog(){
        return $this->belongsTo(Blog::class);
    }

    public function comments(){
        return $this->HasMany(Comment::class);
    }
}
