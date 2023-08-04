<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempFactoryLabourInspectionLaw extends Model
{
    protected $fillable=['township_id','factoryinspectioninform_id','factory_id','inspection_id','sentnotice','shownotice','workingduration','repeatitivework','changenotice','informchangenotice','equalnotice','dailyworktime','weeklyworktime','resttime','weekendholiday','insteadrelaxdays','prepermit','workwithpermit','otpayscale','diffrentotpayment','allowtimecalculate','illegalotallow','illegalottime','illegalotpayment','twofacbyday','definedworktime','stosworktime',
    'washcategory','washamount','washusestate','sitcategory','sitamount','situsestate','medicalcaretype','babysittingroom','dinningroom','waterplace','watercleanence','suffientamount','cooling','tioletcategroy','tioletplace','tioletclean','genderdivide','tioletroom','mtioletroom','ftioletroom','accidentcase','workerregistrationbook','childregistrationbook','generalbook','otbook','wokerofficetimebook','causalleave','annualleave','medicalleave','maternity','publicholiday','weekholiday','leavenote','Mpaymentduration','Dpaymentduration','Ppaymentduration','Cpaymentduration','OTplan','OTpaymentplan','miniexperprize','miniregularprize','miniproductprize','fine','deductamount','illegaldeductedtime','illegaldeductedworkers','illegaldedutedamount','paymentnote','deductednote','allowotnote','instruction1','instruction2','instruction3','instruction4','instruction5'];
}
