<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempFactoryLabourInspectionLawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_factory_labour_inspection_laws', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_id');
            $table->integer('factoryinspectioninform_id');
            $table->integer('inspection_id');
            $table->string('sentnotice')->nullable();
            $table->string('shownotice')->nullable();
            $table->string('workingduration')->nullable();
            $table->string('repeatitivework')->nullable();
            $table->string('changenotice')->nullable();
            $table->string('informchangenotice')->nullable();
            $table->string('equalnotice')->nullable();
            $table->string('dailyworktime')->nullable();
            $table->string('weeklyworktime')->nullable();
            $table->string('resttime')->nullable();
            $table->string('weekendholiday')->nullable();
            $table->string('insteadrelaxdays')->nullable();
            $table->string('prepermit')->nullable();
            $table->string('workwithpermit')->nullable();
            $table->string('otpayscale')->nullable();
            $table->string('diffrentotpayment')->nullable();
            $table->string('allowtimecalculate')->nullable();
            $table->string('illegalotallow')->nullable();
            $table->string('illegalottime')->nullable();
            $table->string('illegalotpayment')->nullable();
            $table->string('twofacbyday')->nullable();
            $table->string('definedworktime')->nullable();
            $table->string('stosworktime')->nullable();
            $table->string('washcategory')->nullable();
            $table->string('washamount')->nullable();
            $table->string('washusestate')->nullable();
            $table->string('sitcategory')->nullable();
            $table->string('sitamount')->nullable();
            $table->string('situsestate')->nullable();
            $table->string('medicalcaretype')->nullable();
            $table->string('babysittingroom')->nullable();
            $table->string('dinningroom')->nullable();
            $table->string('waterplace')->nullable();
            $table->string('watercleanence')->nullable();
            $table->string('suffientamount')->nullable();
            $table->string('cooling')->nullable();
            $table->string('tioletcategroy')->nullable();
            $table->string('tioletplace')->nullable();
            $table->string('tioletclean')->nullable();
            $table->string('genderdivide')->nullable();
            $table->string('tioletroom')->nullable();
            $table->string('mtioletroom')->nullable();
            $table->string('ftioletroom')->nullable();
            $table->string('accidentcase')->nullable();
            $table->string('workerregistrationbook')->nullable();
            $table->string('childregistrationbook')->nullable();
            $table->string('generalbook')->nullable();
            $table->string('wokerofficetimebook')->nullable();
            $table->string('otbook')->nullable();
            $table->string('causalleave')->nullable();
            $table->string('annualleave')->nullable();
            $table->string('medicalleave')->nullable();
            $table->string('maternity')->nullable();
            $table->string('publicholiday')->nullable();
            $table->string('weekholiday')->nullable();
            $table->string('leavenote')->nullable();
            $table->string('Mpaymentduration')->nullable();
            $table->string('Dpaymentduration')->nullable();
            $table->string('Ppaymentduration')->nullable();
            $table->string('Cpaymentduration')->nullable();
            $table->string('OTplan')->nullable();
            $table->string('OTpaymentplan')->nullable();
            $table->string('miniexperprize')->nullable();
            $table->string('miniregularprize')->nullable();
            $table->string('miniproductprize')->nullable();
            $table->string('fine')->nullable();
            $table->string('deductamount')->nullable();
            $table->string('illegaldeductedtime')->nullable();
            $table->string('illegaldeductedworkers')->nullable();
            $table->string('illegaldedutedamount')->nullable();
            $table->string('paymentnote')->nullable();
            $table->string('deductednote')->nullable();
            $table->string('allowotnote')->nullable();
            $table->longText('instruction1')->nullable();
            $table->longText('instruction2')->nullable();
            $table->longText('instruction3')->nullable();
            $table->longText('instruction4')->nullable();
            $table->longText('instruction5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_factory_labour_inspection_laws');
    }
}
