<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi',255);
            $table->date('tanggal_dibuat');
            $table->integer('pertanyaan_id');
            $table->integer('profil_id');
            
            $table->unsignedBigInteger('komentar_pertanyaan1_id');

            $table->foreign('komentar_pertanyaan1_id')->references('id')->on('pertanyaan');

            $table->unsignedBigInteger('komentar_pertanyaan_profil1_id');

            $table->foreign('komentar_pertanyaan_profil1_id')->references('id')->on('profils');
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
        Schema::dropIfExists('komentar_pertanyaan');
    }
}
