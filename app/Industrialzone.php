<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industrialzone extends Model
{
   protected $table = 'industrialzones';
   protected $fillable=['industrialzone_name','township_id'];
}
