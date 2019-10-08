<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable=['nombre','costo','descripcion','marca','cantidad','categoria_id', 'img'];
}
