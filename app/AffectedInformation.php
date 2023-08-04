<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffectedInformation extends Model
{
    protected $fillable=['township_id','painPiece','painArea','Type','FactoryID','FactoryName','OwnerName','FactoryType','FactoryPhno','FactoryAddress','empName','empAge','empGender','empLvl','empLama','empPhno','accDay','accTime','accPlace','accType','accDetail','accLeave','painType','painPart','painCase','affectedInform1','affectedInform2','affectedInform3','affectedInform4','affectedInform5'];
}
