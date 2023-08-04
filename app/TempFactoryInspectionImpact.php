<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempFactoryInspectionImpact extends Model
{
    protected $fillable=['region_id','zone_id','user_id','affected_inform_id','workname','typeofwork','ownername','managername','contactphone','contactemail','district_id','township_id','address','workermale','workerfemale','dieworkername','occupation','dieworkerage','dieworkerex','typeofsex','estimatedloss','absentworkday','returnwork','returnworkdate','injury','casecondition','coverage','damageoccur','occurdate','occurtime','affectpart','categoryname','typeofaffect','causehurm','receivenoti','inspectiondate','check','checkName','checkPosition','injurybrief','photo','fullprocess','underlyingcauses','basiccauses','review','witnessname1','witnessposition1','witnessname2','witnessposition2','witnessownername','witnessmanagername','inspector'];

}
