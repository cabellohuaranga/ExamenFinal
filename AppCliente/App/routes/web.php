<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestamosController;
//use App\Http\Controllers\CargaController;
//use App\Http\Controllers\CompraController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app.inicio');
});

Route::get('prestamos',[PrestamosController::class,'prestamos'])->name('prestamos');
Route::post('createprestamos',[PrestamosController::class,'createprestamos'])->name('createprestamos');

//Route::get('listacarga',[CargaController::class,'listacarga'])->name('listacarga');

