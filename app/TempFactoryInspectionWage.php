<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempFactoryInspectionWage extends Model
{
    protected $fillable=['user_id','factoryinspectioninform_id','inspection_id','Mpaymentduration','Dpaymentduration','Ppaymentduration','Cpaymentduration','OTplan','OTpaymentplan','miniexperprize','maxexperprize','miniregularprize','maxregularprizee','miniproductprize','maxproductprize','deductamount','fine','illegaldeductedtime','illegaldeductedworkers','illegaldedutedamount','paymentnote','deductednote','allowotnote','instruction1','instruction2','instruction3'];

}
