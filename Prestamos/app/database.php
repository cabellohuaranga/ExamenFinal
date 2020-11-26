<?php
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$capsule = new Capsule;

$capsule->addConnection([
'driver'    => 'mysql',
'host'      => 'bdprestamos',
'database'  => 'bdprestamos',
'username'  => 'root',
'password'  => 'bdprestamos',
'charset'   => 'utf8',
'collation' => 'utf8_unicode_ci',
'prefix'    => '',
]);

$capsule->bootEloquent();