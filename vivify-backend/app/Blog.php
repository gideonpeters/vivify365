<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Blog extends Model
{
    //
    public function comments(){
        return $this->HasMany(Comment::class);
    }
    
}
