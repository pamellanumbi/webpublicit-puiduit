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
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index','App\Http\Controllers\ProduitController@index');
Route::get('/edit/{id}','App\Http\Controllers\ProduitController@edit');
Route::get('/show/{id}','App\Http\Controllers\ProduitController@show');
Route::get('/create','App\Http\Controllers\ProduitController@create');
Route::post('/store','App\Http\Controllers\ProduitController@store');
Route::post('/update/{id}','App\Http\Controllers\ProduitController@update');
