<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryFactoryactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_factoryacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factoryinspectioninform_id');
            $table->integer('inspection_id');
            $table->enum('sentnotice',['1','0']);
            $table->enum('shownotice',['1','0']);
            $table->date('workingduration');
            $table->enum('repeatitivework',['1','0']);
            $table->enum('changenotice',['1','0']);
            $table->enum('informchangenotice',['1','0']);
            $table->enum('equalnotice',['1','0']);
            $table->string('dailyworktime');
            $table->string('weeklyworktime');
            $table->string('resttime');
            $table->string('weekendholiday');
            $table->enum('restplan',['1','0']);
            $table->enum('restbylaw',['1','0']);
            $table->enum('inform',['1','0']);
            $table->enum('prepermit',['1','0']);
            $table->enum('workwithpermit',['1','0']);
            $table->string('otpayscale');
            $table->string('diffrentotpayment');
            $table->enum('allowtimecalculate',['1','0']);
            $table->string('illegalotallow');
            $table->string('illegalottime');
            $table->string('illegalotpayment');
            $table->enum('twofacbyday',['1','0']);
            $table->enum('definedworktime',['1','0']);
            $table->enum('stosworktime',['1','0']);
            $table->string('washcategory');
            $table->string('washamount');
            $table->enum('washusestate',['1','0']);
            $table->string('sitcategory');
            $table->string('sitamount');
            $table->enum('situsestate',['1','0']);
            $table->string('medicalcaretype');
            $table->enum('babysittingroom',['1','0']);
            $table->string('dinningroom');
            $table->string('waterplace');
            $table->string('watercleanence');
            $table->enum('suffientamount',['1','0']);
            $table->enum('cooling',['1','0']);
            $table->string('tioletcategroy');
            $table->enum('tioletplace',['1','0']);
            $table->enum('tioletclean',['1','0']);
            $table->enum('genderdivide',['1','0']);
            $table->string('tioletroom');
            $table->string('mtioletroom');
            $table->string('ftioletroom');
            $table->enum('accidentcase',['1','0']);
            $table->enum('workerregistrationbook',['1','0']);
            $table->enum('childregistrationbook',['1','0']);
            $table->enum('generalbook',['1','0']);
            $table->enum('otbook',['1','0']);
            $table->enum('wokerofficetimebook',['1','0']);
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
        Schema::dropIfExists('factory_factoryacts');
    }
}
