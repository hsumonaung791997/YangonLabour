<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryProsecutedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_prosecuteds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chooseType');
            $table->string('IDno');
            $table->string('Name');
            $table->string('Address');
            $table->string('Township');
            $table->string('Zone')->nullable();
            $table->string('OwnerName');
            $table->string('OwnerAddress');
            $table->string('ManagerName');
            $table->string('ManagerAddress');
            $table->string('PlaintiffName');
            $table->string('PlaintiffLvl');
            $table->string('PlaintiffTownship');
            $table->string('PlaintiffZone');
            $table->string('ProsecutedAbout');
            $table->string('ProsecutedLaw');
            $table->string('ProsecutedDay');
            $table->string('CourtName');
            $table->string('DecreeDay')->nullable();
            $table->string('getDecreeDay')->nullable();
            $table->string('DecreeID')->nullable();
            $table->string('noOfemp')->nullable();
            $table->string('empGetmoney')->nullable();
            $table->string('DecreeAct')->nullable();
            $table->string('judgmentDay')->nullable();
            $table->string('judgment')->nullable();
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
        Schema::dropIfExists('factory_prosecuteds');
    }
}
