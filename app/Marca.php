<?php

namespace llanteria;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $timestamps = false;
    
    protected $fillable = array('Descripcion', 'Foto');
}
