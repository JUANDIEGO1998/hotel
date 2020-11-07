<?php

use Illuminate\Support\Facades\Route;

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
//ruta /
Route::get('/', function () {
    return view('principal');
});
//ruta hotel/historia
Route::get('hotel/historia ', function () {
    return view('hotel.historia');
});
//ruta hotel/mision-vision
Route::get('hotel/mision-vision', function () {
    return view('hotel.vision');
});
//ruta hotel/ubicacion
Route::get('hotel/ubicacion ', function () {
    return view('hotel.ubicacion');
});
//ruta servicios habitaciones
Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
});
//ruta servicio eventos
Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios.eventos' ,array('id'=>$id));
});
//ruta reservas
Route::get('reservas', function () {
    return view('reservas.reservas');
});
//ruta contactos
Route::get('contactos', function () {
    return view('contactos');
});
