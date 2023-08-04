<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempFactoryInspectionInform extends Model
{
    protected $table = 'temp_factory_inspection_informs';
    protected $fillable=['inspectorrank','inspection_name','factory_id','user_id','inspectedtimes','inspectiontype','inspectiondate','inspectiontime','lastinspectiondate','workerownername','workerowneraddress','ownername','owneraddress','registerownername','workertotal','managername','manageraddress','intervieweename','intervieweerank','machinetype','horsepower','producttype','productquantity','factoryaddress','jobopen','closeddate','Mmenworker','Mwomenworker','Dmenworker','Dwomenworker','Pmenworker','Pwomenworker','Cmenworker','Cwomenworker','MAmaleworker','MAfemaleworker','DAmaleworker','DAfemaleworker','PAmaleworker','PAfemaleworker','CAmaleworker','','CAfemaleworker','MCmaleworker','MCfemaleworker','DCmaleworker','DCfemaleworker','PCmaleworker','PCfemaleworker','CCmaleworker','CCfemaleworker','inspectionid'];

}
