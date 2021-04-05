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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/nhome', 'HomeController@index')->name('nhome');

Route::get('/tipoeleccion', 'TipoEleccionController@index')->name('tipo_eleccion.index');
Route::post('/tipoeleccion/nueva', 'TipoEleccionController@store')->name('tipo_eleccion.store');
Route::get('/tipoeleccion/crear', 'TipoEleccionController@create')->name('tipo_eleccion.create');
Route::get('/tipoeleccion/editar/{tipoeleccion}', 'TipoEleccionController@edit')->name('tipo_eleccion.edit');

Route::patch('/tipoeleccion/{tipoeleccion}', 'TipoEleccionController@update')->name('tipo_eleccion.update');

Route::delete('/tipoeleccion/{tipoeleccion}', 'TipoEleccionController@destroy')->name('tipo_eleccion.destroy');


Route::get('/elecciones', 'EleccionController@index')->name('eleccion.index');

Route::get('/votosestados', 'RegistroVotoController@index')->name('reportes.tnacional');

Route::get('/votosorg', 'RegistroVotoController@index')->name('reportes.tipoorg');

Route::get('/usuarios', 'UsuarioController@index')->name('usuarios.index');




// Route::get('/nhome', function () {
//     return view('nhome');
// });
