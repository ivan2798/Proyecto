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
Route::middleware(['auth','verified'])->group( function(){
    Route::resource('/jugadores','JugadorController')->parameters(['jugadores' => 'jugadores'])->middleware('vacaciones_verano');

    Route::resource('/lideres','LiderController')->parameters(['lideres' => 'lideres']);  
    
    Route::resource('/pets','PetController')->parameters(['pets' => 'pets']); 
    
    Route::post('archivo/cargar', 'ArchivoController@upload')->name('archivo.upload');
    Route::get('archivo/{archivo}/descargar', 'ArchivoController@download')->name('archivo.download');
    Route::post('archivo/{archivo}/borrar', 'ArchivoController@delete')->name('archivo.delete');
  
    Route::get('pets/{pet}/enviado', 'PetController@notificarEnvio')->name('pets.enviado');
});
Auth::routes(['verify' => true]);

Route::get('/jueces','JuezController@historia')->name('jueces');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified'); 
});

Route::get('/APIITEM','ApiController@apiItem')->name('apisitem');
Route::get('/APIPET','ApiController@apiPet')->name('apispet'); 
Route::get('/items','ItemController@index')->name('items');  
Route::get('/', 'JuezController@inicio') ; 

