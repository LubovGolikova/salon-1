<?php

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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');




Route::get('/', 'HomeController@index');
Route::get('/services',"HomeController@services");


//admin
Route::get('/admin','AdminController@index');
Route::get('/admin/services/create','AdminController@create');
Route::resource('/admin/services','ServiceController');
Route::get('/admin/services/{{$service->id}}','ServiceController@edit');

//order
Route::get('/order','CustomerController@index');

