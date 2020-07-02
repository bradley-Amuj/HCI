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
Route::get('/', 'PagesController@index');
Route::get('/login', 'PagesController@login');

Route::get('/listProducts', 'ProductController@index');
Route::get('/product_insert', 'ProductController@index')->name('product_insert');
Route::post('users/{id}', function ($id) {
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
