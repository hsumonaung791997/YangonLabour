<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempFactoryInspectionAct extends Model
{
   
    protected $table = 'temp_factory_inspection_acts';
    protected $fillable=['user_id','factoryinspectioninform_id','inspection_id','sentnotice','shownotice','workingduration','repeatitivework','changenotice','informchangenotice','equalnotice','dailyworktime','weeklyworktime','resttime','weekendholiday','insteadrelaxdays','prepermit','workwithpermit','otpayscale','diffrentotpayment','allowtimecalculate','illegalotallow','illegalottime','illegalotpayment','twofacbyday','definedworktime','stosworktime',
    'washcategory','washamount','washusestate','sitcategory','sitamount','situsestate','medicalcaretype','babysittingroom','dinningroom','waterplace','watercleanence','suffientamount','cooling','tioletcategroy','tioletplace','tioletclean','genderdivide','tioletroom','mtioletroom','ftioletroom','accidentcase','workerregistrationbook','childregistrationbook','generalbook','otbook','wokerofficetimebook','instruction1','instruction2','instruction'];
}
