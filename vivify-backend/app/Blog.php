<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Comment;

class Blog extends Model
{
    //
    protected $appends = ['image_link', ];
    public function comments(){
        return $this->HasMany(Comment::class);
    }


    public function getImageLinkAttribute(){
        return Storage::url($this->image_url);
    }
    
}
