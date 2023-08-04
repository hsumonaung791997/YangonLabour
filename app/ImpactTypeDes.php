<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImpactTypeDes extends Model
{
    protected $table='impact_type_des';
    protected $fillable=['impact_type_no','case_des_no','case_des_name'];
    
}
