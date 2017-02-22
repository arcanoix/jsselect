<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Alumnos_Cursos', function(Blueprint $Alumnos_Cursos){

                $Alumnos_Cursos->increments('id');
                $Alumnos_Cursos->integer('alumno_id')->unsigned();
                $Alumnos_Cursos->foreign('alumno_id')->references('id')->on('Alumnos');
                $Alumnos_Cursos->integer('curso_id')->unsigned();
                $Alumnos_Cursos->foreign('curso_id')->references('id')->on('Cursos');
                $Alumnos_Cursos->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
