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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contatos', 'ContatosController@index')->name('contatos');

Route::get('/contatos/novo', 'ContatosController@novo')->name('contatos');

Route::post('/contatos/salvar', 'ContatosController@salvar')->name('contatos');

Route::get('/contatos/{contato}/editar', 'ContatosController@editar');

Route::patch('/contatos/{contato}', 'ContatosController@atualizar');

Route::delete('/contatos/{contato}', 'ContatosController@deletar');






