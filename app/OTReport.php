<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OTReport extends Model
{
  protected $fillable=['ot_id','fromuser','touser','status'];
  
  
  public function otdetail(){
	  return $this->hasOne('App\PermissionOtFactory','id','ot_id');
  }
}
