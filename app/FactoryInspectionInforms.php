<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactoryInspectionInforms extends Model
{
    protected $primaryKey='cid';
    public $table = "factoryinspectioninforms";
    protected $fillable=['inspectorrank','inspection_name','factory_id','inspectedtimes','inspectiontype','inspectiondate','inspectiontime','lastinspectiondate','workerownername','workerowneraddress','ownername','owneraddress','registerownername','workertotal','managername','manageraddress','intervieweename','intervieweerank','machinetype','horsepower','producttype','productquantity','factoryaddress','jobopen','closeddate','Mmenworker','Mwomenworker','Dmenworker','Dwomenworker','Pmenworker','Pwomenworker','Cmenworker','Cwomenworker','MAmaleworker','MAfemaleworker','DAmaleworker','DAfemaleworker','PAmaleworker','PAfemaleworker','CAmaleworker','','CAfemaleworker','MCmaleworker','MCfemaleworker','DCmaleworker','DCfemaleworker','PCmaleworker','PCfemaleworker','CCmaleworker','CCfemaleworker','inspectionid'];

    public function factory_leave(){
    	return $this->hasOne('App\Factory_leave');
    }
    public function factory_wage(){
    	return $this->hasOne('App\Factory_wage');
    }
    public function factory_factoryact(){
    	return $this->hasOne('App\Factory_factoryact');
    }
   public function factory(){
    	return $this->belongsTo('App\Factory','factory_id','FactoryId');
    }
}
