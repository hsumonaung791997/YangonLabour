<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factory_leave extends Model
{
    protected $fillable=['factoryinspectioninform_id','inspection_id','causalleave','annualleave','maternity','publicholiday','weekendholiday','leavenote','instruction1','instruction2','instruction'];

}
