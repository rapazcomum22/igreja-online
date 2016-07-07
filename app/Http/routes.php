<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function(){ return redirect('/admin'); });

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/', ['as' => 'main-index', 'uses' => 'SystemController@index']);

//    ROTAS USUARIO DO SISTEMA
    Route::get('/usuario', ['as' => 'usuario-index', 'uses' => 'UsuarioController@index']);
    Route::get('/usuario/create', ['as' => 'usuario-create', 'uses' => 'UsuarioController@create']);
    Route::post('/usuario/adiciona', ['as' => 'usuario-adiciona', 'uses' => 'UsuarioController@adiciona']);
    Route::get('/usuario/edit/{id}', ['as' => 'usuario-edit', 'uses' => 'UsuarioController@edit']);
    Route::post('/usuario/update/{id}', ['as' => 'usuario-update', 'uses' => 'UsuarioController@update']);
});

