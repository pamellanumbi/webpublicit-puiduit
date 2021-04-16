<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','ProduitController@index');
Route::get('/edit/{id}','ProduitController@edit');
Route::get('/show/{id}','ProduitController@show');
Route::get('/create','ProduitController@create');
Route::post('/store','ProduitController@store');
Route::post('/update/{id}','ProduitController@update');
