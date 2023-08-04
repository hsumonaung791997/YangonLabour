<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImpactType extends Model
{
    protected $table='impact_types';
    protected $fillable=['impact_no','impact_name'];
}
