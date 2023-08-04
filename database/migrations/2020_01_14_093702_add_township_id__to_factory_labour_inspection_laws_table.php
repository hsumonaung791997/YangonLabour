<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTownshipIdToFactoryLabourInspectionLawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factory_labour_inspection_laws', function (Blueprint $table) {
            $table->integer('township_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factory_labour_inspection_laws', function (Blueprint $table) {
            //
        });
    }
}