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

Route::get('/' ,"HomeController@index");

Route::get('/homePage', function () {
    return view('homePage',[
       'name' => request('name')

    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user','UsersController@index');
Route::get('/atricle','AtriclesController@index');
