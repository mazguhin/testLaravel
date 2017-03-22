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

Route::get('/home', 'HomeController@index');

// добавление города
Route::get ('/city/add','CityController@add');
Route::post ('/city/add','CityController@store');

// просмотр всех городов
Route::get ('/city', 'CityController@index');
// просмотр конкретного города
Route::get ('/city/{id}', 'CityController@show');

// редактирование города
Route::get ('/city/edit/{id}','CityController@edit');
Route::post ('/city/edit/{id}','CityController@save');

// удалениие города
Route::get ('/city/delete/{id}','CityController@delete');
