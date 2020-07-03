<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  App\Categories;
class News extends Model
{
    protected $guarded=[];
    public function cat()
    {
        return $this->belongsTo('App\Categories','category');
    }
}
