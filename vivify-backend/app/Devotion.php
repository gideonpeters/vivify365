<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Devotional;
class Devotion extends Model
{
    //
    public function devotionals()
    {
        return $this->hasMany(Devotional::class);
    }
}
