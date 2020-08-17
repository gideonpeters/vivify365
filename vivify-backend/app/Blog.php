<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Comment;
use App\Tag;

class Blog extends Model
{
    //
    protected $appends = ['image_link', 'prev_blog', 'next_blog' ];

    public function getPrevBlogAttribute(){

        $prevBlog = DB::table('blogs')->where('id', '<', $this->id)->first();
        return empty($prevBlog) ? null : $prevBlog;

    }

    public function getNextBlogAttribute(){
        $nextBlog = DB::table('blogs')->where('id', '>', $this->id)->first();

        return empty($nextBlog) ? null : $nextBlog;

    }

    public function comments(){
        return $this->HasMany(Comment::class);
    }


    public function getImageLinkAttribute(){
        return Storage::url($this->image_url);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    
}
