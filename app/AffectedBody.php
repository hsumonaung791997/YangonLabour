<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffectedBody extends Model
{
    protected $table='affected_bodies';
    protected $fillable=['body_code','body_name'];
}
