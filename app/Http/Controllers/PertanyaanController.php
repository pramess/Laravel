<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    //
    public function create(){
    	return view('CRUD/content');
    }
public function store(Request $request){
   //dd($request->all());
	//handling dengan validation
    $request->validate([
      'judul'=>'required|unique:pertanyaan', //required:tidak boleh kosong, unique: tidak boleh sama
      'isi'=>'required|unique:pertanyaan'
    ]);
    //cek apakah query berhasil
    $query=DB::table('pertanyaan')->insert([
		  "judul" => $request["judul"],
		  "isi" => $request["isi"]
	]);
   	return redirect('/pertanyaan')->with('success','Berhasil Disimpan!');
   }

   public function index(){
    $pertanyaan=DB::table('pertanyaan')->get(); //select *
    //dd($pertanyaan);
    return view('CRUD.index',compact('pertanyaan')); //compact:mengirim menggunakan compact sehingga bisa diperlakukan sebagai array
   }

   public function show($id){
    $pertanyaan=DB::table('pertanyaan')->where('id',$id)->first();
    return view('CRUD.id',compact('pertanyaan'));

   }

   public function edit($id){
      $pertanyaan=DB::table('pertanyaan')->where('id',$id)->first();
      return view('CRUD.edit',compact('pertanyaan'));
   }
   public function update($id, Request $request){
   
    $pertanyaan=DB::table('pertanyaan')
                    ->where('id',$id)
                    ->update([
                        'judul'=> $request['judul'],
                        'isi'=> $request['isi']
                    ]);
                    return redirect('/pertanyaan')->with('success','Berhasil Update!');
   }
   public function destroy($id){
    $pertanyaan=DB::table('pertanyaan')->where('id',$id)->delete();
    return redirect('pertanyaan')->with('success','Berhasil dihapus');
   }
  
}
