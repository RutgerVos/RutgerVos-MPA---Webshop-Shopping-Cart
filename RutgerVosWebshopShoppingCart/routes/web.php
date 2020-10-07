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
Auth::routes();

Route::get('/', "HomeController@index");
Route::get('/user', ['uses' => 'UsersController@index', 'as' => 'user.profile']);
Route::get('/orderDetail/{id}', ['uses' => 'UsersController@orderDetails', 'as' => 'UsersController.orderDetails']);
Route::get('/articles', 'ArticleController@index');
Route::get('/category', 'CategoryController@index');
Route::get('/add-to-cart-categorie/{id},{categoryId}', ['uses' => 'ShoppingCartController@AddToCartCategory', 'as' => 'ShoppingCart.AddToCartCategory']);
Route::get('/categoryArticles/{id}', ['uses' => 'CategoryController@categoryArticles', 'as' => 'CategoryController.categoryArticles']);
Route::get('/add-to-cart/{id}', ['uses' => 'ShoppingCartController@getAddToCart', 'as' => 'ShoppingCart.getAddToCart']);
Route::get('/shopping-cart', ['uses' => 'ShoppingCartController@getCartItems', 'as' => 'ShoppingCart.getCartItems']);
Route::post('/equal-form-cart/{id},{qty}', ['uses' => 'ShoppingCartController@changeCartItem', 'as' => 'ShoppingCart.changeCartItem']);
Route::get('/remove-form-cart/{id}', ['uses' => 'ShoppingCartController@removeCartItems', 'as' => 'ShoppingCart.removeCartItems']);
Route::get('/checkout/{totalPrice}', ['uses' => 'ShoppingCartController@CheckOut', 'as' => 'Checkout']);
Route::get('/article', ['uses' => 'ArticleController@index', 'as' => 'article.index']);
Route::get('/articleDetail/{detail},{name},{price},{id}', ['uses' => 'ArticleController@detail', 'as' => 'article.detail']);
Route::get('/articleDetail-add/{id}', ['uses' => 'ShoppingCartController@AddToCartDetail', 'as' => 'ShoppingCart.AddToCartDetail']);
