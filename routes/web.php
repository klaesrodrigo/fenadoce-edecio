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

Route::get('/', 'CandidataController@principal')->name('principal');

Route::post('/', 'CandidataController@pesquisa')->name('pesquisa');

Route::get('/candidatas/votos', 'CandidataController@votosCandidata')->name('candidata.votos')->middleware('auth');

Route::get('candidatas/consulta/{id}', 'CandidataController@consultaVotosCandidata')->name('candidata.consultar')->middleware('auth');


Route::get('/votar/{id}', 'CandidataController@votar')->name('votar');

Route::resource('candidatas', 'CandidataController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/votar/{id}', 'VotosController@post')->name('votos.create');


