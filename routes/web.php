<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;


#Rotas iniciais
Route::prefix('/')->group(function ($router) {
    Route::get('/', ['as' => 'index', 'uses' => 'App\Http\Controllers\HomeController@index']);
    Route::get('/about', ['as' => 'about', 'uses' => 'App\Http\Controllers\HomeController@about']);
});

#Rotas de Cliente
Route::group(['middleware' => 'web'], function () {
    #Rotas de Cliente Autenticado
    Auth::routes();
    #Home User
    Route::prefix('/home')->group(function ($router) {
        Route::get('/', ['as' => 'home', 'uses' => 'App\Http\Controllers\UserHomeController@index']);
    });
    #Visualização de reservas 
    Route::prefix('/reserve')->group(function($router){
        Route::get('/', ['as' => 'user.reserve', 'uses' => 'App\Http\Controllers\UserReserveController@index']);
        #Abaixo dessa linha, deve ter a rota de update de cancelar reserva
        Route::get('/update/{id}', ['as' => 'reserve.update', 'uses' => 'App\Http\Controllers\UserReserveController@update']);
    }); 
            
});

#Rotas de Estabelecimentos
Route::group(['middleware' => 'establishment'], function () {
    Route::prefix('/establishment')->group(function ($router) {
        Route::get('/login', ['as' => 'establishment.login', 'uses' => 'App\Http\Controllers\EstablishmentController@login']);
        Route::post('/postLogin', ['as' => 'establishment.postLogin', 'uses' => 'App\Http\Controllers\EstablishmentController@postLogin']);
        Route::get('/logout', ['as' => 'establishment.logout', 'uses' => 'App\Http\Controllers\EstablishmentController@logout']);
        Route::get('/create', ['as' => 'establishment.create', 'uses' => 'App\Http\Controllers\EstablishmentController@create']);
        Route::post('/register', ['as' => 'establishment.register', 'uses' => 'App\Http\Controllers\EstablishmentController@register']);
        #Rotas de Estabelecimento - Autenticadas 
        Route::group(['middleware' => 'auth:establishment'], function(){
            Route::get('/', ['as' => 'establishment', 'uses' => 'App\Http\Controllers\EstablishmentController@index']);
            #Cadastro de Mesas
            Route::prefix('/table')->group(function ($router) {
                Route::get('/', ['as' => 'table', 'uses' => 'App\Http\Controllers\EstablishmentTableController@index']);
                Route::get('/create', ['as' => 'table.create', 'uses' => 'App\Http\Controllers\EstablishmentTableController@create']);
                Route::get('/edit/{id}', ['as' => 'table.edit', 'uses' => 'App\Http\Controllers\EstablishmentTableController@edit']);
                Route::get('/destroy/{id}', ['as' => 'table.destroy', 'uses' => 'App\Http\Controllers\EstablishmentTableController@destroy']);
                Route::post('/store', ['as' => 'table.store', 'uses' => 'App\Http\Controllers\EstablishmentTableController@store']);
                Route::post('/update/{id}', ['as' => 'table.update', 'uses' => 'App\Http\Controllers\EstablishmentTableController@update']);
            });
            #Cadastro de Produtos
            Route::prefix('/product')->group(function ($router) {
                Route::get('/', ['as' => 'product', 'uses' => 'App\Http\Controllers\EstablishmentProductController@index']);
                Route::get('/create', ['as' => 'product.create', 'uses' => 'App\Http\Controllers\EstablishmentProductController@create']);
                Route::get('/edit/{id}', ['as' => 'product.edit', 'uses' => 'App\Http\Controllers\EstablishmentProductController@edit']);
                Route::get('/destroy/{id}', ['as' => 'product.destroy', 'uses' => 'App\Http\Controllers\EstablishmentProductController@destroy']);
                Route::post('/store', ['as' => 'product.store', 'uses' => 'App\Http\Controllers\EstablishmentProductController@store']);
                Route::post('/update/{id}', ['as' => 'product.update', 'uses' => 'App\Http\Controllers\EstablishmentProductController@update']);
            });
            #Visualização de Reservas
             Route::prefix('/reserve')->group(function ($router) {
                Route::get('/', ['as' => 'reserve', 'uses' => 'App\Http\Controllers\EstablishmentReserveController@index']);
                  #Abaixo dessa linha, deve ter a rota de update de cancelar reserva
                  //
            });
        });
    });
});