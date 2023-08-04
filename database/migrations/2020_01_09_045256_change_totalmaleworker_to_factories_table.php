<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTotalmaleworkerToFactoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factories', function (Blueprint $table) {
            $table->string('MenWorker')->default(0)->change();
            $table->string('WomenWorker')->default(0)->change();
            $table->string('DailyMenWorker')->default(0)->change();
            $table->string('DailyWomenWorker')->default(0)->change();
            $table->string('PieceMenWorker')->default(0)->change();
            $table->string('PieceWomenWorker')->default(0)->change();
            $table->string('CMenWorker')->default(0)->change();
            $table->string('CWomenWorker')->default(0)->change();
            $table->string('CDailyMenWorker')->default(0)->change();
            $table->string('CDailyWomenWorker')->default(0)->change();
            $table->string('CPieceMenWorker')->default(0)->change();
            $table->string('CPieceWomenWorker')->default(0)->change();
            $table->string('AMenWorker')->default(0)->change();
            $table->string('AWomenWorker')->default(0)->change();
            $table->string('ADailyMenWorker')->default(0)->change();
            $table->string('ADailyWomenWorker')->default(0)->change();
            $table->string('APieceMenWorker')->default(0)->change();
            $table->string('APieceWomenWorker')->default(0)->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factories', function (Blueprint $table) {
            


        });
    }
}
