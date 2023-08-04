<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ftype');
            $table->string('s_leader');
            $table->string('s_leaderrank');
            $table->string('s_contributor1')->nullable();
            $table->string('s_contributor1rank')->nullable();
            $table->string('s_contributor2')->nullable();
            $table->string('s_contributor2rank')->nullable();
            $table->string('s_contributor3')->nullable();
            $table->string('s_contributor3rank')->nullable();
            $table->text('s_place')->nullable();
            $table->string('township')->nullable(); 
            $table->integer('factory_id');
            $table->string('factoryname');
            $table->string('trainingclass')->nullable();
            $table->integer('emen');
            $table->integer('ewomen');
            $table->string('mmen');
            $table->string('mwomen');
            $table->string('s_times')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('seminars');
    }
}
