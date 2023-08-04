<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndustryCategory extends Model
{
    protected $fillable=['IndustryCategoryName','township_id'];


    public function factory(){
    	return $this->hasMany('App\Factory');
    }
}
