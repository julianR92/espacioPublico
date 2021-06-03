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
// rutas de aaplicacion
Route::get('/', 'HomeController@index')->name('home');
Route::get('/solicitud/confirmacion', 'SolicitudController@index')->name('solicitud.confirmacion');
Route::get('/solicitud/finalizar','SolicitudController@end')->name('solicitud.finalizar');

Route::post('/solicitud/save','SolicitudController@store')->name('solicitud.insert');
Route::post('/solicitud/consulta', 'SolicitudController@show')->name('solicitud.consulta');
Route::post('/solicitud/experiencia', 'SolicitudController@experiencia')->name('solicitud.experiencia');

Route::get('/solicitud/detalle/{id}', 'SolicitudController@detalle')->name('solicitud.detalle');

Route::post('/solicitud/updateDocs', 'SolicitudController@updateDoc')->name('solicitud.updateDocs');









