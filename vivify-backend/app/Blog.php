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
    protected $appends = ['image_link', ];

    public function previous(){

        $prevBlog = Blog::where('id', '<', $this->id)->first();
        return empty($prevBlog) ? null : $prevBlog;

    }

    public function next(){
        $nextBlog = Blog::where('id', '>', $this->id)->first();

        return empty($nextBlog) ? null : $nextBlog;

    }

    public function getRecentlyPublishedAttribute(){
        $latest = Blog::where('id', '!=', $this->id)->take(2)->latest()->get();

        return $latest;

    }

    public function getRelatedPostsAttribute(){
        $related = Blog::whereHas('tags', function ($query){
            $tagIds = $this->tags()->pluck('tags.id')->all();
            $query->whereIn('tags.id', $tagIds);
        })->where('id', '<>', $this->id)->take(2)->latest()->get();


        return $related;

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
