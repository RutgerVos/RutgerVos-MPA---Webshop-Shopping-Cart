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
Route::get('/articles', 'ArticlesController@index');
Route::get('/categories', 'CategoriesController@index');
Route::get('/add-to-cart-categorie/{id},{name}', ['uses' => 'ShoppingCartController@AddToCartCategorie', 'as' => 'ShoppingCart.AddToCartCategorie']);
Route::get('/categorie/{name}', ['uses' => 'CategoriesController@categorieArticles', 'as' => 'CategoriesController.categorieArticles']);
Route::get('/add-to-cart/{id}', ['uses' => 'ShoppingCartController@getAddToCart', 'as' => 'ShoppingCart.getAddToCart']);
Route::get('/shopping-cart', ['uses' => 'ShoppingCartController@getCartItems', 'as' => 'ShoppingCart.getCartItems']);
Route::post('/equal-form-cart', ['uses' => 'ShoppingCartController@changeCartItem', 'as' => 'ShoppingCart.changeCartItem']);
Route::get('/remove-form-cart/{id}', ['uses' => 'ShoppingCartController@removeCartItems', 'as' => 'ShoppingCart.removeCartItems']);
Route::get('/checkout', ['uses' => 'ShoppingCartController@CheckOut', 'as' => 'Checkout']);
Route::get('/articles', ['uses' => 'ArticlesController@index', 'as' => 'articles.index']);
Route::get('/articleDetail/{detail},{name}', ['uses' => 'ArticlesController@detail', 'as' => 'articles.detail']);
