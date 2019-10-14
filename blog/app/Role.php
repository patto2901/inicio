<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable=['rol'];
     //Relacion uno a uno base de datos. Metodo .Tabla hija que envia a Usuarios
    public function user(){
        return $this->hasOne('App\User');
    }
}
