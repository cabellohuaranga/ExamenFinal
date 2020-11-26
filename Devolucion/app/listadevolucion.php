<?php
require '../html/vendor/autoload.php';
require './database.php';
Use App\models\Devolucion;
$modelCarga = new Devolucion();
echo json_encode($modelCarga::all());
