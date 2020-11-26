<?php
namespace App\models;
use \Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
   protected $fillable=['name_libro','dni','fecha_devolucion','estado'];
}