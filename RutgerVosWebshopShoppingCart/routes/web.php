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
Route::get('/add-to-cart/{id}',['uses'=> 'ShoppingCartController@getAddToCart','as'=>'ShoppingCart.getAddToCart']);
Route::get('/shopping-cart',['uses'=> 'ShoppingCartController@getCartItems','as'=>'ShoppingCart.getCartItems']);
// Route::get('/add-to-cart/{id}', 'ShoppingCartController@getAddToCart');
// Route::get('/shopping-cart', 'ShoppingCartController@getCartItems');
Route::get('/checkout',['uses'=> 'cart@getCheckOut','as'=>'checkout']);
Route::post('/checkout',['uses'=> 'cart@postCheckout','as'=>'checkout']);
Route::get('/articles',['uses'=>'ArticlesController@index','as'=>'articles.index']);
