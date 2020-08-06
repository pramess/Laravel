<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPertanyaanJawaban1IdToPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_jawaban1_id');

            $table->foreign('pertanyaan_jawaban1_id')->references('id')->on('jawaban');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {

            $table->dropForeign(['pertanyaan_jawaban1_id']);
            $table->dropColumn(['pertanyaan_jawaban1_id']);
        });
    }
}
