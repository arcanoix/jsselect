<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $fillable = ['alumno'];

      public function cursos()
    {
        return $this->hasMany('App\cursos');
    }


}
