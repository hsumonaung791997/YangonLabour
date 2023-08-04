<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTypeToTempFactoryInspectionImpactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temp_factory_inspection_impacts', function (Blueprint $table) {
            $table->string('workermale')->default(0)->change();
            $table->string('workerfemale')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temp_factory_inspection_impacts', function (Blueprint $table) {
            //
        });
    }
}
