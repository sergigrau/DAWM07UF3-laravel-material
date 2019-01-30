<?php

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
/*
Route::get('/prova/{id}', function ($id) { return view('prova', ['nom'
    => 'SERGI'], ['id'=> $id]); });



Route::get('suma/{n}/{m?}', function ($n=0, $m=0) { return 'suma '.($n+$m); })
->where(['n'=>'[0-9]', 'm'=>'[0-9]']);

Route::get('suma2/{n}/{m?}', function ($n=0, $m=0) { return view('suma', 
    ['n'=>$n,'m'=>$m]);})->where(['n'=>'[0-9]', 'm'=>'[0-9]']);

Route::get('user/{nom}', function ($nom) { return 'correcte';})
    ->where('nom', '[A-Za-z]+');

Route::match(['get', 'post'], '/hola', function () { return 'Hola';});
*/
Auth::routes();

Route::get('/sumar/{n}/{m?}', 'OperacionsController@sumar');
Route::get('/restar/{n}/{m?}', 'OperacionsController@restar');
Route::get('/llistar/{nota?}', 'OperacionsController@llistar');
Route::get('/afegir}', 'OperacionsController@afegir');


Route::get('/mostrar', 'OperacionsController@mostrar');
Route::post('/desar', 'OperacionsController@desar');
