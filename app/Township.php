<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    protected $fillable=['township_name','district_id'];

    public function district(){
        return $this->hasOne('App\District','id','district_id');
      }

      public function seminar(){
      	return $this->belongsTo('App\Seminar');
      }
}
