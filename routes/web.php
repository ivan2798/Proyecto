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
Route::middleware(['vacaciones_verano'])->group( function(){
Route::middleware(['auth'])->group( function(){
    Route::resource('/jugadores','JugadorController')->parameters(['jugadores' => 'jugadores'])->middleware('vacaciones_verano');

    Route::resource('/lideres','LiderController')->parameters(['lideres' => 'lideres']);  
    
    Route::resource('/pets','PetController')->parameters(['pets' => 'pets']); 


});
Auth::routes();

Route::get('/items','ItemController@index')->name('items'); 

Route::get('/jueces','JuezController@historia')->name('jueces');

Route::get('/home', 'HomeController@index')->name('home'); 
});


Route::get('/', 'JuezController@inicio') ;
