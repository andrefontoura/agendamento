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

//Route::get('/', 'NomeController@function'); 
// E põe o view dentro do function, que é mais
// simples
// Por padrão todos os 'home' do 'sistema' trarão
// uma lista, com todos os já registrados e a opção
// de inserir um novo, deletar ou atualizar o registro
// Só pra ficar mais simples

Route::get('/register', 'RegisterController@list');
Route::get('/register/create', 'RegisterController@create');
Route::post('/register/store', 'RegisterController@store');

Route::get('/user',function() {
    return view('welcome');
});

Route::get('/schedule',function() {
    return view('welcome');
});
