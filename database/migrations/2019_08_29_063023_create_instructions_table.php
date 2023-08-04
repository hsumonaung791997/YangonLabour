<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructionsTable extends Migration
{
   
    public function up()
    {
        Schema::create('instructions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id');
            $table->text('instruction');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('instructions');
    }
}
