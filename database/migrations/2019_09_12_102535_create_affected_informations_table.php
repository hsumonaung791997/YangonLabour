<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectedInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affected_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Type');
            $table->string('FactoryID');
            $table->string('FactoryName');
            $table->string('OwnerName');
            $table->string('FactoryType');
            $table->string('FactoryPhno');
            $table->string('FactoryAddress');
            $table->string('empName');
            $table->string('empAge');
            $table->string('empGender');
            $table->string('empLvl');
            $table->string('empLama');
            $table->string('empPhno');
            $table->string('accDay');
            $table->string('accTime');
            $table->string('accPlace');
            $table->string('accType');
            $table->string('accDetail');
            $table->string('accLeave');
            $table->string('painType');
            $table->string('painPart');
            $table->string('painCase');
            $table->string('affectedInform1')->nullable();
            $table->string('affectedInform2')->nullable();
            $table->string('affectedInform3')->nullable();
            $table->string('affectedInform4')->nullable();
            $table->string('affectedInform5')->nullable();
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
        Schema::dropIfExists('affected_informations');
    }
}
