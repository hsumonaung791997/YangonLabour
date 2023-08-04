<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImpactInstruction extends Model
{
    protected $fillable=['name','factory_type','case_id','factory_id','lastdodate','inspected_date','documenttype','instructiontitle','instructiondep','instructiondate','user_id','create_date','docmentno','refdoc','role_id','township_id','district_id','instructor','instructor_rank','instruction1','instruction2','instruction3','instruction4','instruction5'];

}
