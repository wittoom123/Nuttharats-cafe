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
Route::get('product', function () {
    return view('product');
});


//admin
Route::get('/admin/index','AdminController@index')->name('index');
//category
Route::get('/admin/category','CategoryController@index');
Route::post('/admin/category/create','CategoryController@create')->name('create');
Route::get('/admin/category/edit/{id}','CategoryController@edit');
//product
Route::get('/admin/product','ProductController@index');
Auth::routes();

//Route for normal user
Route::group(['middleware' => ['auth']], function () {
Route::get('/home', 'HomeController@index')->name('home');
});
//Route for admin
Route::group(['prefix' => 'admin'], function () {
Route::group(['middleware' => ['admin']], function () {
Route::get('/dashboard', 'admin\AdminController@index');
    });
});
