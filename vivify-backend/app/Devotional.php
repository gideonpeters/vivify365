<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devotional extends Model
{
    //
    public function devotion()
    {
        return $this->belongsTo(Devotional::class);
    }
}
