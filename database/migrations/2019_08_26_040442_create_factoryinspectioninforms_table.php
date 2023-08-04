<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryinspectioninformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factoryinspectioninforms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_id');
            $table->unsignedTinyInteger('inspectedtimes');
            $table->enum('inspectiontype',['0','1']);
            $table->Date('inspectiondate');
            $table->string('inspectiontime');
            $table->Date('lastinspectiondate')->nullable();
            $table->string('workerownername');
            $table->text('workerowneraddress');
            $table->string('ownername');
            $table->string('owneraddress');
            $table->string('registerownername');
            $table->string('workertotal');
            $table->string('managername');
            $table->text('manageraddress');
            $table->string('intervieweename');
            $table->string('intervieweerank');
            $table->string('machinetype');
            $table->string('horsepower');
            $table->string('producttype');
            $table->string('productquantity');
            $table->text('factoryaddress');
            $table->enum('jobopen',['1','0']);
            $table->date('closeddate')->nullable();
            $table->integer('Mmenworker');
            $table->integer('Mwomenworker');
            $table->integer('Dmenworker')->nullable();
            $table->integer('Dwomenworker')->nullable();
            $table->integer('Pmenworker')->nullable();
            $table->integer('Pwomenworker')->nullable();
            $table->integer('Cmenworker')->nullable();
            $table->integer('Cwomenworker')->nullable();
            $table->integer('MAmaleworker');
            $table->integer('MAfemaleworker');
            $table->integer('DAmaleworker')->nullable();
            $table->integer('DAfemaleworker')->nullable();
            $table->integer('PAmaleworker')->nullable();
            $table->integer('PAfemaleworker')->nullable();
            $table->integer('CAmaleworker')->nullable();
            $table->integer('CAfemaleworker')->nullable();
            $table->integer('MCmaleworker');
            $table->integer('MCfemaleworker');
            $table->integer('DCmaleworker')->nullable();
            $table->integer('DCfemaleworker')->nullable();
            $table->integer('PCmaleworker')->nullable();
            $table->integer('PCfemaleworker')->nullable();
            $table->integer('CCmaleworker')->nullable();
            $table->integer('CCfemaleworker')->nullable();
            $table->integer('inspectionid');
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
        Schema::dropIfExists('factoryinspectioninforms');
    }
}
