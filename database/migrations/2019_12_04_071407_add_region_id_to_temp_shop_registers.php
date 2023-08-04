<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegionIdToTempShopRegisters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temp_shop_registers', function (Blueprint $table) {
            $table->integer('region_id')->nullable()->after('class_name');
            $table->integer('district_id')->nullable()->after('region_id');
            $table->integer('township_id')->nullable()->after('district_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temp_shop_registers', function (Blueprint $table) {
            //
        });
    }
}
