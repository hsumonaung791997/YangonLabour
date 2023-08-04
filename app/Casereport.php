<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casereport extends Model
{
    protected $fillable=['case_id','reportinformation','factory_type'];
}
