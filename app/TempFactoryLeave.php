<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempFactoryLeave extends Model
{ 
    protected $table = 'temp_factory_leaves';
    protected $fillable=['user_id','factoryinspectioninform_id','inspection_id','causalleave','annualleave','maternity','publicholiday','weekendholiday','leavenote','instruction1','instruction2','instruction'];

}
