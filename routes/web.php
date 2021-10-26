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
        Route::get('/', ['as' => 'home', 'uses' => 'App\Http\Controllers\HomeUserController@index']);
    });
    Route::prefix('/management-products')->group(function ($router) {
        Route::get('/', ['as' => 'management.products', 'uses' => 'App\Http\Controllers\ProductUserController@index']);
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
                Route::get('/', ['as' => 'table', 'uses' => 'App\Http\Controllers\TableController@index']);
                Route::get('/create', ['as' => 'table.create', 'uses' => 'App\Http\Controllers\TableController@create']);
                Route::get('/edit/{id}', ['as' => 'table.edit', 'uses' => 'App\Http\Controllers\TableController@edit']);
                Route::get('/destroy/{id}', ['as' => 'table.destroy', 'uses' => 'App\Http\Controllers\TableController@destroy']);
                Route::post('/store', ['as' => 'table.store', 'uses' => 'App\Http\Controllers\TableController@store']);
                Route::post('/update/{id}', ['as' => 'table.update', 'uses' => 'App\Http\Controllers\TableController@update']);
            });
            #Cadastro de Produtos
            Route::prefix('/product')->group(function ($router) {
                Route::get('/', ['as' => 'product', 'uses' => 'App\Http\Controllers\ProductController@index']);
                Route::get('/create', ['as' => 'product.create', 'uses' => 'App\Http\Controllers\ProductController@create']);
                Route::get('/edit/{id}', ['as' => 'product.edit', 'uses' => 'App\Http\Controllers\ProductController@edit']);
                Route::get('/destroy/{id}', ['as' => 'product.destroy', 'uses' => 'App\Http\Controllers\ProductController@destroy']);
                Route::post('/store', ['as' => 'product.store', 'uses' => 'App\Http\Controllers\ProductController@store']);
                Route::post('/update/{id}', ['as' => 'product.update', 'uses' => 'App\Http\Controllers\ProductController@update']);
            });
            #Visualização de pedidos
             Route::prefix('/order')->group(function ($router) {
                Route::get('/', ['as' => 'order', 'uses' => 'App\Http\Controllers\OrderController@index']);
            });
        });
    });
});