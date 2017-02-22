<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use DB;

class AlumnosController extends Controller
{
    //
	public function index(){
    	$alumno= DB::table('Alumnos')->get();
    		return view('principal', compact('alumno'));
	
	}

	public function save(){

			


	}
}
