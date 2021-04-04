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
Route::get('/elecciones', 'EleccionController@index')->name('eleccion.index');

Route::get('/registrovotos', 'RegistroVotoController@index')->name('reportes.tnacional');



// Route::get('/nhome', function () {
//     return view('nhome');
// });
