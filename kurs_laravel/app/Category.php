<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //kategoria jest przypisana do wielu filmów

    public function videos()
    {
    	return $this->belongsToMany('App\Video')->withTimestamps();
    }
}
