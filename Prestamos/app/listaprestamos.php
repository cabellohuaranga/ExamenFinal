<?php
require '../html/vendor/autoload.php';
require './database.php';
Use App\models\Prestamo;
$modelEncomienda = new Prestamo();
echo json_encode($modelEncomienda::all());