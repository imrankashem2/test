<?php

namespace App;
use Cohensive\Embed\Facades\Embed;


use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
   protected $guarded =[];

   public function getVideoHtmlAttribute()
   {
       $embed = Embed::make($this->youtube)->parseUrl();

       if (!$embed){
        return '';
       }

        //    else{
        //     // $embed->setAttribute(['width' => 600]);
        //    }

       $embed->setAttribute(['width' =>350]);
       return $embed->getHtml();
   }
}
