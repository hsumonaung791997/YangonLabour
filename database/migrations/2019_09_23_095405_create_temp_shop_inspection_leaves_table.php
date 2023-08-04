<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempShopInspectionLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_shop_inspection_leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('check_id');
            $table->integer('shop_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('temp_shop_inspection_leaves');
    }
}
