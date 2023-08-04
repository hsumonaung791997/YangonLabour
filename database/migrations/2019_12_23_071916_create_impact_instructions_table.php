<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpactInstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impact_instructions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_type');
            $table->integer('case_id');
            $table->string('factory_id');
            $table->date('create_date');
            $table->date('lastdodate');
            $table->string('instructiontitle');
            $table->string('instructiondep');
            $table->date('instructiondate');
            $table->integer('user_id');
            $table->string('docmentno');
            $table->string('refdoc');
            $table->date('inspected_date');
            $table->string('name');
            $table->string('documenttype'); 
            $table->longText('instruction1')->nullable();
            $table->longText('instruction2')->nullable();
            $table->longText('instruction3')->nullable();
            $table->longText('instruction4')->nullable();
            $table->longText('instruction5')->nullable();
            $table->integer('role_id'); 
            $table->integer('township_id')->nullable();
            $table->integer('district_id');
            $table->string('instructor');   
            $table->string('instructor_rank');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('impact_instructions');
    }
}
