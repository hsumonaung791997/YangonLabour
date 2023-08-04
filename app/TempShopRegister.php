<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempShopRegister extends Model
{
    protected $fillable=['region_id','district_id','township_id','totalforeignmen','totalforeignwomen','totalMaleWorker','totalFemaleWorker','OwnerPassport','AccidentRecordBook','SafetyHealth','SafetyRank','prenoticedate','section_id','division_id','group_id','class_name','SubscriberName','SubscriberRank','shopname','user_id','shopemail','shopfax','shopphone','ownername','shoptype','ownernrc','owneraddress','ownerphone','ownerfax','owneremail','mangername','managernrc','manageraddress','managerphone','managerfax','manageremail','operate24hr','townshipid','loacationaddress','MenWorker','WomenWorker','DailyMenWorker','DailyWomenWorker','PieceMenWorker','PieceWomenWorker','CMenWorker','CWomenWorker','CDailyMenWorker','CDailyWomenWorker','CPieceMenWorker','CPieceWomenWorker','AMenWorker','AWomenWorker','ADailyMenWorker','ADailyWomenWorker','APieceMenWorker','APieceWomenWorker','MForeignerMenWorker','MForeignerWomenWorker','DailyForeignerMenWorker','DailyForeignerWomenWorker','PForeignerMenWorker','PForeignerWomenWorker','PropertyType','Investment','UsedPower','ProducedProduct','ProducedOthers','MonthlyAmounts','RawMaterials','Goods','WorkType','Contract','OverTime','OTPermit','SSB','SafteySide','ManagementExpert','StartDate','Welfare','CitizenMenWorker','CitizenWomenWorker','ForeignerMenWorker','ForeignerWomenWorker','SalaryDate','MinimumSalary','MaximumSalary','WorkTimeType','StartWorkTime','EndWorkTime','freetimefrom','freetimeto','closeworkdays','SignatureRank','RegDate','SignatureName'];

}
