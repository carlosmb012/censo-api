<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//contraseñas
//4sq?8-PgthH2/n+P
//UERu^daYR%I&AzI#vANL

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', 'UserController@authenticate');
Route::post('me', 'UserController@getAuthenticatedUser');
Route::get('/user/{id}', 'UserController@show');

Route::get('/ciudad', 'CiudadController@index');
Route::get('/ciudad/{id}', 'CiudadController@show');
//MODULO INMUEBLE
Route::get('/material/{idFactor}', 'MaterialController@index');

Route::get('/visita/{iduser}', 'VisitaProgramController@show');
Route::get('/inmueble/list/{idVisita}', 'InmuebleController@index');

Route::get('/inmueble/{id}', 'InmuebleController@show');
Route::get('/inmueble/cambiarEstado/{id}', 'InmuebleController@cambiarEstado');
Route::patch('/inmueble/{id}', 'InmuebleController@update');
Route::get('/propietario/{id}', 'PropietarioController@show');
Route::get('/edificacion/{id}', 'EdificacionController@show');
Route::get('/edificacMater/{id}', 'EdificacionMaterialController@show');

Route::post('/imagen', 'ImagenController@store');
Route::get('/imagen/{idInmu}', 'ImagenController@index');
Route::post('/imagendelete/{idInmu}', 'ImagenController@delete');

//MODULO ACTIVIDAD ECONOMICA
Route::get('/actividadp', 'PatActividadController@index');
Route::get('/condicionp', 'PatCondicionController@index');
Route::get('/visitap/{iduser}', 'PatVisitaProgramController@show');
Route::get('/patente/list/{idVisita}', 'PatenteController@index');
Route::get('/patente/{id}', 'PatenteController@show');
Route::post('/patente', 'PatenteController@store');
Route::patch('/patente/{id}', 'PatenteController@update');
Route::get('/patente/cambiarEstado/{id}', 'PatenteController@cambiarEstado');
Route::post('/visitap', 'PatVisitaProgramController@store');
Route::get('/imagenp/{idPat}', 'PatImagenController@index');
Route::post('/imagenp', 'PatImagenController@store');
Route::delete('/imagenp/{idPat}', 'PatImagenController@delete');
Route::get('/propietariop/{id}', 'PatPropietarioController@show');
Route::get('/resultadop/{id}', 'PatCondResultController@show');