<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactoryInspectionSafety extends Model
{
    protected $fillable=['township_id','factoryinspectioninform_id','weather','inspection_type','inspection_datetime','factoryname','factoryregion','ownername','owneraddress','factoryOwnerNrc','factoryOwnerAddress','intervieweeName','intervieweeAddress','energytype','horsepower','producedProduct','workType','workTime','menworker','womenworker','medicalticket','workclean','drainflow','employmentPaint','aircondition','particals','populationstatus','population','nature','sunlight','drinkingwater','drinkingwatermana','toilet','toiletType','genderdivide','toiletquantity','noiseprotect','noiceprotection','dangerprotect','protectmach','machinestatus','machinepieces','load','inspectionentry','machinefinding','wearing','ladder','wearingstatus','ladderstatus','holecover','holecoverstatus','dangergas','dangergasuses','escapeman','firealam','emergencyentrace','cleargoway','aboutfire','seat','sittingplan','dinningroom','dinningroomplan','babysittingroom','babysittingplan','washing','washingplan','nursing','nursinginstruction','accidentinform','accidentinformation','selfprotectwear','selfprotection','safetyhealth','negotiate','training','safteyhealthcare','change1','change2','change3','change4','change5','inspectorname','inspectorrank'];
    public function factoryinspection(){
		return $this->hasOne('App\Factoryinspectioninform','cid','factoryinspectioninform_id');
	}
}
