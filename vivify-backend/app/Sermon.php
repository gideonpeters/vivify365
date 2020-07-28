<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Sermon extends Model
{
    //
    protected $appends = ['image_link', 'audio_link'];
    protected $casts = ['is_featured' => 'boolean'];

    public function getImageLinkAttribute(){
        return Storage::url($this->image_url);
    }

    public function getAudioLinkAttribute(){
        return Storage::url($this->audio_url);
    }
}
