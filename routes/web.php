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

Route::get('/', 'homeController@view')->name('home');
Route::get('login', 'loginController@view')->name('loginView');
Route::get('register', 'registerController@view')->name('registerView');
Route::get('productDetailUser/{id}', 'flowerController@show')->name('productDetailView');
Route::get('updateProduct/{id}','flowerController@update')->name('updateView');
Route::get('updateCategory/{id}','categoryController@update')->name('updateCategoryView');
Route::get('category/{id}', 'categoryController@view')->name('categoryView');
Route::get('search', 'flowerController@search')->name('searchView');
Route::get('logout', 'logOutController@logout')->name('logout');
Route::get('manageCategory', 'categoryController@view2')->name('manageCategoryView');
Route::get('addFlower', 'flowerController@addFlowerView')->name('addFlowerView');
Route::get('changePassword', 'registerController@changePasswordView')->name('changePasswordView')->middleware('auth');
Route::get('mycart', 'cartController@show')->name('showCart')->middleware('auth');
Route::get('transactionHistory', 'transactionController@view')->name('transactionView');

Route::post('cart/{id}', 'cartController@postCart')->name('postCart')->middleware('auth');
Route::get('transactionHistoryDetail/{id}', 'transactionController@show')->name('tDetailPost');
Route::post('insertRegister', 'registerController@insertRegister')->name('registerInsert')->middleware('guest');
Route::post('insertFlower', 'flowerController@insertFlower')->name('insertFlower');
Route::post('submitPassword', 'registerController@submitPassword')->name('submitPassword')->middleware('auth');
Route::post('loginData', 'loginController@loginData')->name('dataLogin')->middleware('guest');
Route::post('updateQuantity/{id}', 'cartController@submitUpdate')->name('submitUpdateQty');
Route::post('checkOut', 'cartController@checkOut')->name('checkOut');
Route::put('updateCategory/{id}', 'categoryController@submitUpdate')->name('submitUpdateCategoryData');
Route::put('updateProduct/{id}', 'flowerController@submitUpdate')->name('submitUpdateData');
Route::delete('deleteProduct/{id}', 'flowerController@submitDelete')->name('submitDeleteData');
Route::delete('deleteCategory/{id}', 'categoryController@submitDelete')->name('submitDeleteCategoryData');


