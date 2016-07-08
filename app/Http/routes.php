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

//    ROTAS MEMBRO DO SISTEMA
    Route::get('/membro', ['as' => 'membro-index', 'uses' => 'MembroController@index']);
    Route::get('/membro/create', ['as' => 'membro-create', 'uses' => 'MembroController@create']);
    Route::post('/membro/adiciona', ['as' => 'membro-adiciona', 'uses' => 'MembroController@adiciona']);
    Route::get('/membro/edit/{id}', ['as' => 'membro-edit', 'uses' => 'MembroController@edit']);
    Route::post('/membro/update/{id}', ['as' => 'membro-update', 'uses' => 'MembroController@update']);

//    ROTAS PADRE
    Route::get('/padre', ['as' => 'padre-index', 'uses' => 'PadreController@index']);
    Route::get('/padre/create', ['as' => 'padre-create', 'uses' => 'PadreController@create']);
    Route::post('/padre/adiciona', ['as' => 'padre-adiciona', 'uses' => 'PadreController@adiciona']);
    Route::get('/padre/edit/{id}', ['as' => 'padre-edit', 'uses' => 'PadreController@edit']);
    Route::post('/padre/update/{id}', ['as' => 'padre-update', 'uses' => 'PadreController@update']);

    //    ROTAS CULTO
    Route::get('/missa', ['as' => 'missa-index', 'uses' => 'MissaController@index']);
    Route::get('/missa/create', ['as' => 'missa-create', 'uses' => 'MissaController@create']);
    Route::post('/missa/adiciona', ['as' => 'missa-adiciona', 'uses' => 'MissaController@adiciona']);
    Route::get('/missa/edit/{id}', ['as' => 'missa-edit', 'uses' => 'MissaController@edit']);
    Route::post('/missa/update/{id}', ['as' => 'missa-update', 'uses' => 'MissaController@update']);

});

