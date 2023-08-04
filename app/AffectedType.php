<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffectedType extends Model
{
    protected $table='affected_types';
    protected $fillable=['affected_code','affected_name'];
}
