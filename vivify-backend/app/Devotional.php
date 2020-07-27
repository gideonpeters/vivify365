<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Devotion;
class Devotional extends Model
{
    //
    public function devotion()
    {
        return $this->belongsTo(Devotion::class);
    }
}
