<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FactoryId');
			$table->string('FactoryName');
           	$table->longText('NoticeAddress');
            $table->longText('ContactAddress');
            $table->string('ContactPhone');
            $table->string('ContactFax');
            $table->string('EmailAdd');
            $table->longText('NextYearProcess');
            $table->string('StreamHP')->nullable();
            $table->string('GasHP')->nullable();
            $table->string('MotorHP')->nullable();
            $table->string('WaterHP')->nullable();
            $table->string('WorkedPower')->nullable();
            $table->string('ElectricPower')->nullable();
            $table->string('MenWorker')->nullable();
            $table->string('WomenWorker')->nullable();
            $table->string('DailyMenWorker')->nullable();
            $table->string('DailyWomenWorker')->nullable();
            $table->string('PieceMenWorker')->nullable();
            $table->string('PieceWomenWorker')->nullable();
            $table->string('CMenWorker')->nullable();
            $table->string('CWomenWorker')->nullable();
            $table->string('CDailyMenWorker')->nullable();
            $table->string('CDailyWomenWorker')->nullable();
            $table->string('CPieceMenWorker')->nullable();
            $table->string('CPieceWomenWorker')->nullable();
            $table->string('AMenWorker')->nullable();
            $table->string('AWomenWorker')->nullable();
            $table->string('ADailyMenWorker')->nullable();
            $table->string('ADailyWomenWorker')->nullable();
            $table->string('APieceMenWorker')->nullable();
            $table->string('APieceWomenWorker')->nullable();
            $table->Date('StartDate')->nullable();
            $table->Date('TestingDate')->nullable();
            $table->unsignedTinyInteger('WorkTimeType')->nullable();
            $table->string('MToSTimein')->nullable();
            $table->string('MToSTimeout')->nullable();
            $table->string('MToFTimein')->nullable();
            $table->string('MToFTimeout')->nullable();
            $table->string('STimein')->nullable();
            $table->string('STimeout')->nullable();
            $table->string('LunchTime')->nullable();
			$table->string('ManagerName');
            $table->string('OwnerName');
            $table->string('OwnerNrc');
            $table->longText('OwnerAddress');
            $table->string('OwnerPhno');
            $table->string('OwnerFax');
            $table->string('OwnerEmail');
            $table->Date('RegDate');
			$table->integer('WorkTypeId')->nullable();
			$table->string('UsedPower')->nullable();
			$table->string('PropertyType')->nullable();
			$table->string('Contract')->nullable();
			$table->string('ProducedProduct')->nullable();
			$table->string('ProducedOthers')->nullable();
			$table->unsignedTinyInteger('NoticeStatus')->nullable();
            $table->string('Goods')->nullable();
			$table->string('RawMaterials')->nullable();            
            $table->string('MonthlyAmounts')->nullable();
            $table->integer('CitizenMenWorker')->nullable();
            $table->integer('CitizenWomenWorker')->nullable();
            $table->integer('ForeignerMenWorker')->nullable();
            $table->integer('ForeignerWomenWorker')->nullable();
            $table->string('SalaryDate')->nullable();
            $table->integer('MinimumSalary')->nullable();
            $table->integer('MaximumSalary')->nullable();
            $table->string('WorkingTime')->nullable();
            $table->unsignedTinyInteger('OverTime')->nullable();
			$table->unsignedTinyInteger('OTPermit')->nullable();
            $table->unsignedTinyInteger('SafteySide')->nullable();
			$table->string('Welfare')->nullable();
            $table->unsignedTinyInteger('SSB')->nullable();
            $table->unsignedTinyInteger('ManagementExpert')->nullable();
            $table->string('SignatureName')->nullable();
            $table->string('SignatureRank')->nullable();
            $table->string('OwnerPassport')->nullable();
            $table->string('LunchStartTime')->nullable();
            $table->string('LunchEndTime')->nullable();
            $table->string('Investment')->nullable();
            $table->string('section_id')->nullable();
            $table->string('division_id')->nullable();
            $table->string('group_id')->nullable();
            $table->string('class_name')->nullable();
            $table->string('SubscriberName')->nullable();
            $table->string('SubscriberRank')->nullable();
            $table->string('AccidentRecordBook')->nullable();
            $table->string('SafetyHealth')->nullable();
            $table->string('SafetyRank')->nullable();
            $table->string('MToFTimeInOther')->nullable();
            $table->string('MToFTimeoutOther')->nullable();
            $table->string('TypeofFactory')->nullable();
            $table->string('PreNoticeDate')->nullable();
            $table->string('FactoryAddress')->nullable();
            $table->string('region_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('township_id')->nullable();
            $table->string('zone_id')->nullable();
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
        Schema::dropIfExists('factory_histories');
    }
}
