<?php

use Illuminate\support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Tienda;
use App\Http\Controllers\Cuidados;

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

//Controlador Administracion
Route::get('/', 'Administracion@index'); //Ruta /
Route::get('ubicacion', 'Administracion@ubi'); //Ruta ubicacion
Route::get('qyr', 'Administracion@qyr'); //Ruta qyr

//Controlador Tienda
Route::get('tienda/gatos', 'Tienda@gatos');//Ruta Tienda/gatos
Route::get('tienda/perros', 'Tienda@perros'); //Ruta Tienda/perros

//Controlador Cuidados
Route::get('cuidados/peluqueria', 'Cuidados@pelu'); //Ruta cuidados/peluqueria
Route::get('cuidados/servicios', 'Cuidados@ser'); //Ruta cuidados/servicios




