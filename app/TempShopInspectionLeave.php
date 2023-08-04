<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempShopInspectionLeave extends Model
{
    protected $table = 'temp_shop_inspection_leaves';

    protected $fillable=['check_id','user_id','numholidays','opportunityhol','paidwage','vacationdays','workerfrees','annual','contract','registrationbook','medicalticketqan','passionremark','generalremark','officeremark','inspectionname'];

}
