<?php

namespace App\models;
use \Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $fillable=['name_libro','dni','name_persona', 'fecha_prestamo', 'fecha_devolucion'];
}