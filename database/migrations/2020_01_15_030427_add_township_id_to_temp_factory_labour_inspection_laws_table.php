<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTownshipIdToTempFactoryLabourInspectionLawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temp_factory_labour_inspection_laws', function (Blueprint $table) {
            $table->integer('township_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temp_factory_labour_inspection_laws', function (Blueprint $table) {
            //
        });
    }
}
