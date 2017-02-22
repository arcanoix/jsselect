<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cursos;
use App\Alumno;
use DB;

class CursosController extends Controller
{
    //

    public function create(Request $data){
    	
    		$curso = new cursos;

    			$curso->curso=$data["curso"];
    			//$curso->alumnos=$data["alumnos"];
    			//dd($curso);

    			$contenido='';
    			$cont=0;
    			//dd($data->alumnos);

    			foreach($data->alumnos as $alumno){
    				if ($cont==0){
    					$contenido=$alumno;
    				} else {
    					$contenido.=','.$alumno;
    				}
    				$cont++;
    			}

    			$curso->alumnos=$contenido;

    			//dd($curso);
    			$curso->save();
    			//$curso->alumnos_cursos()->sync($data->alumnos);
    }
}
