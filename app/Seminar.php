<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $fillable=['ftype',
                's_leader',
                's_leaderrank',
                's_contributor1',
                's_contributor1rank',
                's_contributor2',
                's_contributor2rank',
                's_contributor3',
                's_contributor3rank',
                's_place',
                'township_id',
                'district_id',
                'factory_id',
                'factoryname',
                'trainingclass',
                'emen',
                'ewomen',
                'mmen',
                'mwomen',
                's_times','user_id','helddate'];


    public function township(){
        return $this->hasOne('App\Township','id','township_id');
    }
     public function district(){
        return $this->hasOne('App\District','id','district_id');
    }
}
