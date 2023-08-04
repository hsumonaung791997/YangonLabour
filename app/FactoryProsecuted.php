<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactoryProsecuted extends Model
{
    protected $fillable=['chooseType','IDno','Name','Address','Township','Zone','OwnerName','OwnerAddress','ManagerName','ManagerAddress','PlaintiffName','PlaintiffLvl','PlaintiffTownship','PlaintiffZone','ProsecutedAbout','ProsecutedLaw','ProsecutedDay','CourtName','DecreeDay','getDecreeDay','DecreeID','noOfemp','empGetmoney','DecreeAct','judgmentDay','judgment'];
}
