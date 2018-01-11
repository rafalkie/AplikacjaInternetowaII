<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

protected $fillable =['name'];

   

    ///Lista id kategori dla jednego filmu
    public function getVideoListAttribute()($idCategory)
    {
        return $this->videos->pluck('id')->where('id','$idCategory')->all();
    }
}
