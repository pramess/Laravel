<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
   public function auth(){
   	return view('form');
   }
   public function selamat_datang(Request $request){
   	//dd($request->all());
   		$firstname=$request["firstname"];
   		$lastname=$request["lastname"];
   		return"<h2>Selamat Datang $firstname $lastname</h2> <br><br> <h3> Terimakasih telah bergabung di Sanbercode.Socialmedia kita bersama!</h3>";
   }
}
