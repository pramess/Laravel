<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi',255);
            $table->date('tanggal_dibuat');
            $table->integer('pertanyaan_id');
            $table->integer('profil_id');
            
            $table->unsignedBigInteger('komentar_jawaban1_id');

            $table->foreign('komentar_jawaban1_id')->references('id')->on('jawaban');

            $table->unsignedBigInteger('komentar_jawaban_profil1_id');

            $table->foreign('komentar_jawaban_profil1_id')->references('id')->on('profils');

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
        Schema::dropIfExists('komentar_jawaban');
    }
}
