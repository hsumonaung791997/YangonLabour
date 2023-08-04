<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempShopLabourInspectionLawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_shop_labour_inspection_laws', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id');
            $table->integer('check_id');
            $table->integer('user_id');
            $table->longText('work_duration')->nullable();
            $table->string('worktime_notice')->nullable();
            $table->string('SSB')->nullable();
            $table->string('salary_time')->nullable();
            $table->string('weekend_holiday')->nullable();
            $table->string('numholidays')->nullable();
            $table->string('opportunityhol')->nullable();
            $table->string('paidwage')->nullable();
            $table->string('vacationdays')->nullable();
            $table->string('workerfrees')->nullable();
            $table->string('annual')->nullable();
            $table->string('contract')->nullable();
            $table->string('registrationbook')->nullable();
            $table->string('medicalticketqan')->nullable();
            $table->string('passionremark')->nullable();
            $table->string('generalremark')->nullable();
            $table->string('officeremark')->nullable();
            $table->string('inspectionname')->nullable();
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
        Schema::dropIfExists('temp_shop_labour_inspection_laws');
    }
}
