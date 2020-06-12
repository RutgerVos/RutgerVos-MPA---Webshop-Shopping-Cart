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

// Route::get('/homePage', function () {
//     return view('homePage',[
//        'name' => request('name')

//     ]);
// });

Auth::routes();

Route::get('/' ,"HomeController@index");
Route::get('/user','UsersController@index');
Route::get('/articles','ArticlesController@index');
Route::get('/categories','CategoriesController@index');
Route::get('/add-to-cart/{id}',['uses'=> 'ArticlesController@getAddToCart','as'=>'Articles.AddToCart']);
Route::get('/shopping-cart',['uses'=> 'ArticlesController@getCart','as'=>'Articles.shoppingCart']);
Route::get('/checkout',['uses'=> 'ArticlesController@getCheckout','as'=>'checkout']);
Route::get('/articles',['uses'=>'ArticlesController@index','as'=>'articles.index']);