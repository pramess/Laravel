<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    //gunakan script dibawah jika tabel tidak menggunakan bahasa inggris atau ingin mespesifikasikan tabel yang akan dibuat modelnya
    protected $table="pertanyaan";
    //fillable : menentukan kolom mana yang able untuk diisi datanya
    protected $fillable=["judul","isi"];
    //Guarding : menentukan kolom mana saja yang tidak bisa diisi
    //protected $guarded=[];

}
