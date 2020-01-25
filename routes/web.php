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
Route::get('/registar_pets','controlerPets@index');
Route::get('/index','controlerPets@index')->name('pets.index');
Route::get('/owner','controlerOwners@index');
Route::get('/pets/create','controlerPets@create');
Route::post('/pets/store','controlerPets@store');
//Route::get('/owners/create','controlerOwners@create');
//Route::post('/owners/store','controlerOwners@store');
Route::get('/pets/edit/{id}','controlerPets@edit');
Route::patch('/pets/update/{id}','controlerPets@update');
Route::delete('/pets/destroy/{id}', 'PetsController@destroy');
