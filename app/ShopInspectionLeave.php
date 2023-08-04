<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopInspectionLeave extends Model
{
    protected $table = 'shop_inspection_1951_laws';

    protected $fillable=['check_id','shop_id','numholidays','opportunityhol','paidwage','vacationdays','workerfrees','annual','contract','registrationbook','medicalticketqan','passionremark','generalremark','officeremark','inspectionname'];
}

