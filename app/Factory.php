<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{

    protected $fillable=['status','OwnerPassport','LunchStartTime','LunchEndTime','Investment','section_id','division_id','group_id','class_name','SubscriberName','SubscriberRank','AccidentRecordBook','SafetyHealth','SafetyRank','MToFTimeInOther','MToFTimeoutOther','FactoryId','FactoryName','NoticeAddress','ContactAddress','ContactPhone','ContactFax','EmailAdd','NextYearProcess','StreamHP','GasHP','MotorHP','WaterHP','WorkedPower','ElectricPower','MenWorker','WomenWorker','DailyMenWorker','DailyWomenWorker','PieceMenWorker','PieceWomenWorker','CMenWorker','CWomenWorker','CDailyMenWorker','CDailyWomenWorker','CPieceMenWorker','CPieceWomenWorker','AMenWorker','AWomenWorker','ADailyMenWorker','ADailyWomenWorker','APieceMenWorker','APieceWomenWorker','StartDate','TestingDate','WorkTimeType','MToSTimein','MToSTimeout','MToFTimein','MToFTimeout','STimein','STimeout','ManagerName','OwnerName','OwnerNrc','OwnerAddress','OwnerPhno','OwnerFax','OwnerEmail','RegDate','IndustryCategory_Id','UsedPower','PropertyType','Contract','ProducedProduct','ProducedOthers','NoticeStatus','NoticeStatus','Goods','MonthlyAmounts','CitizenMenWorker','CitizenWomenWorker','ForeignerMenWorker','ForeignerWomenWorker','SalaryDate','MinimumSalary','MaximumSalary','OverTime','OTPermit','SafteySide','Welfare','SSB','ManagementExpert','SignatureName','SignatureRank','TypeofFactory','PreNoticeDate','FactoryAddress','RawMaterials','region_id','district_id','township_id','zone_id','MCmaleworker','MCfemaleworker','CAmaleworker','CAfemaleworker','CCmaleworker','CCfemaleworker','totalMaleWorker','totalFemaleWorker'];


public function industrycategory(){
			return $this->belongsTo('App\Factory');
	}

	 public function factoryinspection(){
    	return $this->belongsTo('App\Factoryinspectioninform');
    }
    public function zone(){
    	return $this->hasOne('App\Industrialzone','id','zone_id');
    	
    }
    public function township(){
    	return $this->hasOne('App\Township','id','township_id');
    }

    public function region(){
        return $this->hasOne('App\Region','id','region_id');

    }
}
