<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
	protected $fillable=['factory_type','checkid','factory_id','lastdodate','instructiontitle','instructiondep','instructiondate','user_id','create_date','docmentno','refdoc','inspectiontype_id','a_leave','a_wages','a_note','a_worktime','a_other','f_safety','f_health','f_welfare','f_note','f_other','a_leavedesc','a_wagedesc','a_notedesc','a_worktimedesc','a_otherdesc','f_safetydesc','f_healthdesc','f_welfaredesc','f_otherdesc','f_notedesc','role_id','township_id','district_id','instructor','instructor_rank'];



		
}
