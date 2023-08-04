<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionOtFactory extends Model
{
    protected $fillable=['factory_id','FromDay','ToDay','TotalWorker','Othour','totalOthour','user_id','factorytype','township','district','touser_id'];
}
