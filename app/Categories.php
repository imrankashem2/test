<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;
class Categories extends Model
{
    protected $guarded=[];

      public function news(){
    	return $this->hasMany('App\News','category');
    }
}
