<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = 'shop_workers';
    protected $fillable = ['name', 'position', 'salary', 'daily_work_hours', 'break_time', 'weekly_off_day', 'joning_date', 'note', 'status','shop_inform_id'];
}
