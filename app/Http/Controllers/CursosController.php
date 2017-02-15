<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cursos;
use DB;

class CursosController extends Controller
{
    //

    public function create(){
    		$curso= DB::table('cursos')->get();
    		return view('principal', compact('curso'));

    }
}
