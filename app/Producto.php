<?php

namespace llanteria;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;
    
    protected $fillable = array('CodTipo', 'CodMarca', 'Modelo', 'Medida', 'Piso', 'Capas', 'Precio', 'Descripcion', 'Foto');
}
