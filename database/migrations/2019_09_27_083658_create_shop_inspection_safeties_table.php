<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopInspectionSafetiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_inspection_safeties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('check_id');
            $table->integer('shop_id');
            $table->integer('user_id');
            $table->string('shopname')->nullable();
            $table->string('shopregion')->nullable();
            $table->string('ownername')->nullable();
            $table->string('owneraddress')->nullable();
            $table->string('shopOwnerNrc')->nullable();
            $table->string('shopOwnerAddress')->nullable();
            $table->string('intervieweeName')->nullable();
            $table->string('intervieweeAddress')->nullable();
            $table->string('energytype')->nullable();
            $table->string('horsepower')->nullable();
            $table->string('producedProduct')->nullable();
            $table->string('producedPower')->nullable();
            $table->string('workType')->nullable();
            $table->string('workTime')->nullable();
            $table->string('menworker')->nullable();
            $table->string('womenworker')->nullable();
            $table->string('totalworker')->nullable();
            $table->string('medicalticket')->nullable();
            $table->string('workclean',10)->nullable();
            $table->string('drainflow',10)->nullable();
            $table->string('employmentPaint',10)->nullable();
            $table->string('workenvironment')->nullable();
            $table->string('aircondition',10)->nullable();
            $table->string('weather',10)->nullable();
            $table->string('particals',10)->nullable();
            $table->string('accomodation')->nullable();
            $table->string('populationstatus',10)->nullable();
            $table->string('population')->nullable();
            $table->string('nature',10)->nullable();
            $table->string('sunlight',10)->nullable();
            $table->string('natureandlight')->nullable();
            $table->string('drinkingwater',10)->nullable();
            $table->string('drinkingwatermana')->nullable();
            $table->string('toilet')->nullable();
            $table->string('toiletType')->nullable();
            $table->string('genderdivide')->nullable();
            $table->string('toiletquantity')->nullable();
            $table->string('tioletfinding')->nullable();
            $table->string('noiseprotect')->nullable();
            $table->string('noiceprotection')->nullable();
            $table->string('dangerprotect')->nullable();
            $table->string('protectmach')->nullable();
            $table->string('machinestatus')->nullable();
            $table->string('machineprotection')->nullable();
            $table->string('machinepieces')->nullable();
            $table->string('load')->nullable();
            $table->string('inspectionentry')->nullable();
            $table->string('machinefinding')->nullable();
            $table->string('wearing')->nullable();
            $table->string('wearingstatus')->nullable();
            $table->string('ladder')->nullable();
            $table->string('ladderstatus')->nullable();
            $table->string('holecover')->nullable();
            $table->string('holecoverstatus')->nullable();
            $table->string('dangergas')->nullable();
            $table->string('dangergasuses')->nullable();
            $table->string('escapeman')->nullable();
            $table->string('firealam')->nullable();
            $table->string('emergencyentrace')->nullable();
            $table->string('cleargoway')->nullable();
            $table->string('aboutfire')->nullable();
            $table->string('seat')->nullable();
            $table->string('sittingplan')->nullable();
            $table->string('dinningroom')->nullable();
            $table->string('dinningroomplan')->nullable();
            $table->string('babysittingroom')->nullable();
            $table->string('babysittingplan')->nullable();
            $table->string('washing')->nullable();
            $table->string('washingplan')->nullable();
            $table->string('nursing')->nullable();
            $table->string('nursinginstruction')->nullable();
            $table->string('accidentinform')->nullable();
            $table->string('accidentinformation')->nullable();
            $table->string('selfprotectwear')->nullable();
            $table->string('selfprotection')->nullable();
            $table->string('safetyhealth')->nullable();
            $table->string('negotiate')->nullable();
            $table->string('training')->nullable();
            $table->string('safteyhealthcare')->nullable();
            $table->string('change1')->nullable();
            $table->string('change2')->nullable();
            $table->string('change3')->nullable();
            $table->string('change4')->nullable();
            $table->string('change5')->nullable();
            $table->string('inspectorname')->nullable();
            $table->string('inspectorrank')->nullable();
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
        Schema::dropIfExists('shop_inspection_safeties');
    }
}
