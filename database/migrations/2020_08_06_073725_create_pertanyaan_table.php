<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul',45);
            $table->string('isi',255);
            $table->date('tanggal_buat');
            $table->date('tanggal_diperbarui');
            $table->integer('jawaban_tepat_id');
            $table->integer('profil_id');
            
            $table->unsignedBigInteger('pertanyaan_profil1_id');

            $table->foreign('pertanyaan_profil1_id')->references('id')->on('profils');
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
        Schema::dropIfExists('pertanyaan');
    }
}
