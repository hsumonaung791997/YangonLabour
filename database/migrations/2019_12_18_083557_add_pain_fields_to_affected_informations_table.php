<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPainFieldsToAffectedInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('affected_informations', function (Blueprint $table) {
            $table->string('painPiece')->after('painPart')->nullable();
            $table->string('painArea')->after('painPiece')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('affected_informations', function (Blueprint $table) {
           
        });
    }
}
