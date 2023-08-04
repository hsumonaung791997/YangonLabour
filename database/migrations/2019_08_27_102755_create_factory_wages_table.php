<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryWagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_wages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factoryinspectioninform_id');
            $table->integer('inspection_id');
            $table->string('Mpaymentduration')->nullable();
            $table->string('Dpaymentduration')->nullable();
            $table->string('Ppaymentduration')->nullable();
            $table->string('Cpaymentduration')->nullable();
            $table->string('OTplan');
            $table->string('OTpaymentplan');
            $table->string('miniexperprize')->nullable();
            $table->string('maxexperprize')->nullable();
            $table->string('miniregularprize')->nullable();
            $table->string('maxregularprizee')->nullable();
            $table->string('miniproductprize')->nullable();
            $table->string('maxproductprize')->nullable();
            $table->string('deductamount');
            $table->text('fine');
            $table->string('illegaldeductedtime');
            $table->string('illegaldeductedworkers');
            $table->string('illegaldedutedamount');
            $table->enum('paymentnote',['1','0']);
            $table->enum('deductednote',['1','0']);
            $table->enum('allowotnote',['1','0']);
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
        Schema::dropIfExists('factory_wages');
    }
}
