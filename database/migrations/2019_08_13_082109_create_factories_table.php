<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factories', function (Blueprint $table) {
            $table->increments('id');
			$table->string('FactoryId');
			$table->string('FactoryName');
           	$table->longText('NoticeAddress');
            $table->longText('ContactAddress');
            $table->string('ContactPhone');
            $table->string('ContactFax');
            $table->string('EmailAdd');
            $table->longText('NextYearProcess');
            $table->string('StreamHP')->Nullable();
            $table->string('GasHP')->Nullable();
            $table->string('MotorHP')->Nullable();
            $table->string('WaterHP')->Nullable();
            $table->string('WorkedPower');
            $table->string('ElectricPower');
            $table->integer('MenWorker');
            $table->integer('WomenWorker');
            $table->integer('DailyMenWorker');
            $table->integer('DailyWomenWorker');
            $table->integer('PieceMenWorker');
            $table->integer('PieceWomenWorker');
            $table->integer('CMenWorker');
            $table->integer('CWomenWorker');
            $table->integer('CDailyMenWorker');
            $table->integer('CDailyWomenWorker');
            $table->integer('CPieceMenWorker');
            $table->integer('CPieceWomenWorker');
            $table->integer('AMenWorker');
            $table->integer('AWomenWorker');
            $table->integer('ADailyMenWorker');
            $table->integer('ADailyWomenWorker');
            $table->integer('APieceMenWorker');
            $table->integer('APieceWomenWorker');
            $table->Date('StartDate');
            $table->Date('TestingDate');
            $table->unsignedTinyInteger('WorkTimeType');
            $table->string('MToSTimein')->Nullable();
            $table->string('MToSTimeout')->Nullable();
            $table->string('MToFTimein')->Nullable();
            $table->string('MToFTimeout')->Nullable();
            $table->string('STimein')->Nullable();
            $table->string('STimeout')->Nullable();
            $table->string('LunchTime')->Nullable();
			$table->string('ManagerName');
            $table->string('OwnerName');
            $table->string('OwnerNrc');
            $table->longText('OwnerAddress');
            $table->string('OwnerPhno');
            $table->string('OwnerFax');
            $table->string('OwnerEmail');
            $table->Date('RegDate');
			$table->integer('IndustryCategory_Id');
			$table->integer('WorkTypeId');
			$table->string('UsedPower');
			$table->string('PropertyType');
			$table->string('Contract');
			$table->string('ProducedProduct');
			$table->string('ProducedOthers');
			$table->unsignedTinyInteger('NoticeStatus');
			$table->string('Goods')->Nullable();
            $table->string('MonthlyAmounts')->Nullable();
            $table->integer('CitizenMenWorker')->Nullable();
            $table->integer('CitizenWomenWorker')->Nullable();
            $table->integer('ForeignerMenWorker')->Nullable();
            $table->integer('ForeignerWomenWorker')->Nullable();
            $table->string('SalaryDate')->Nullable();
            $table->integer('MinimumSalary');
            $table->integer('MaximumSalary');
            $table->string('WorkingTime');
            $table->unsignedTinyInteger('OverTime');
			$table->unsignedTinyInteger('OTPermit');
            $table->unsignedTinyInteger('SafteySide');
			$table->string('Welfare');
            $table->unsignedTinyInteger('SSB');
            $table->unsignedTinyInteger('ManagementExpert');
            $table->string('SignatureName');
            $table->string('SignatureRank');

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
        Schema::dropIfExists('factories');
    }
}
