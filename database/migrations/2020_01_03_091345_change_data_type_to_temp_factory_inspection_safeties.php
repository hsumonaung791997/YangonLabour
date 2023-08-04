<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDataTypeToTempFactoryInspectionSafeties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temp_factory_inspection_safeties', function (Blueprint $table) {
            $table->string('menworker')->change();
            $table->string('womenworker')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temp_factory_inspection_safeties', function (Blueprint $table) {
            //
        });
    }
}
