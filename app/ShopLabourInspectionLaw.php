<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopLabourInspectionLaw extends Model
{
    protected $fillable=['township_id','shop_id','check_id','user_id','work_duration','worktime_notice','SSB','salary_time','weekend_holiday','numholidays','opportunityhol','paidwage','vacationdays','workerfrees','annual','contract','registrationbook','medicalticketqan','passionremark','generalremark','officeremark','inspectionname'];
}
