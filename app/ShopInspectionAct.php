<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopInspectionAct extends Model
{
    protected $table = 'shop_inspection_2016_laws';

    protected $fillable=['shop_id','check_id','user_id','work_duration','worktime_notice','SSB','salary_time','weekend_holiday'];
}
