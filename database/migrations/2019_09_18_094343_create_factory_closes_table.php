<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryClosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_closes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('factory_id');
            $table->string('FactoryAddress');
            $table->string('totalWorker');
            $table->date('NoticeDate');
            $table->date('CloseDate')->nullable();
            $table->longtext('DesCloseFactory')->nullable();
            $table->string('attachfile')->nullable();
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
        Schema::dropIfExists('factory_closes');
    }
}
