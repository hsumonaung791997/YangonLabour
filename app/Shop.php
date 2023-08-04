<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable=['totalforeignmen','totalforeignwomen','totalMaleWorker','totalFemaleWorker','OwnerPassport','AccidentRecordBook','SafetyHealth','SafetyRank','PreNoticeDate','section_id','division_id','group_id','class_name','SubscriberName','SubscriberRank','ShopId','shopname','shopemail','shopfax','shopphone','ownername','shoptype','ownernrc','owneraddress','ownerphone','ownerfax','owneremail','mangername','managernrc','manageraddress','managerphone','managerfax','manageremail','operate24hr','loacationaddress','MenWorker','WomenWorker','DailyMenWorker','DailyWomenWorker','PieceMenWorker','PieceWomenWorker','CMenWorker','CWomenWorker','CDailyMenWorker','CDailyWomenWorker','CPieceMenWorker','CPieceWomenWorker','AMenWorker','AWomenWorker','ADailyMenWorker','ADailyWomenWorker','APieceMenWorker','APieceWomenWorker','MForeignerMenWorker','MForeignerWomenWorker','DailyForeignerMenWorker','DailyForeignerWomenWorker','PForeignerMenWorker','PForeignerWomenWorker','PropertyType','Investment','UsedPower','ProducedProduct','ProducedOthers','MonthlyAmounts','RawMaterials','Goods','WorkType','Contract','OverTime','OTPermit','SSB','SafteySide','ManagementExpert','StartDate','Welfare','CitizenMenWorker','CitizenWomenWorker','ForeignerMenWorker','ForeignerWomenWorker','SalaryDate','MinimumSalary','MaximumSalary','WorkTimeType','StartWorkTime','EndWorkTime','freetimefrom','freetimeto','closeworkdays','SignatureRank','RegDate','SignatureName','region_id','district_id','township_id','AccidentRecordBook','SafetyHealth','SafetyRank'];

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
