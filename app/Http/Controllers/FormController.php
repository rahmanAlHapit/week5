<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index(Request $request){
    	$nama_variabel = $request->input('nama');
    	$email = $request->input('email');
    	$gender = $request->input('gender');
    	$weapon = $request->input('weapon');
    	return view('forms')
    	->with('nama', $nama_variabel)
    	->with('email', $email)
    	->with('gender', $gender)
    	->with('weapon', $weapon);
    }
}
