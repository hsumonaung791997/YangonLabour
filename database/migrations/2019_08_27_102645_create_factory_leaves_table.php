<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factoryinspectioninform_id');
            $table->integer('inspection_id');
            $table->enum('causalleave',['1','0']);
            $table->enum('annualleave',['1','0']);
            $table->enum('maternity',['1','0']);
            $table->enum('publicholiday',['1','0']);
            $table->enum('weekendholiday',['1','0']);
            $table->enum('leavenote',['1','0']);            
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
        Schema::dropIfExists('factory_leaves');
    }
}
