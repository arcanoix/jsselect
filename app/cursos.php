<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    //
    protected $fillable = ['cursos'];

      public function Alumnos()
    {
        return $this->hasMany('App\Alumno');
    }


}
