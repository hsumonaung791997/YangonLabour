<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionOtFactoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_ot_factories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_id');
            $table->string('FromDay');
            $table->string('ToDay');
            $table->string('TotalWorker');
            $table->string('Othour');
            $table->string('totalOthour');
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('permission_ot_factories');
    }
}
