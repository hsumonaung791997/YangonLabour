<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
   protected $fillable=['district_name','region_id'];

   public function township(){
   	 return $this->hasMany('App\Township');
   }
}
