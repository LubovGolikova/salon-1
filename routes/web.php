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

//main
Route::get('/', 'HomeController@index');

//services
Route::get('/services',"HomeController@services");

//about
Route::get('/about',"HomeController@about");

//orderCustomer
Route::get('/order','CustomerController@index');
Route::post('/order/add','CustomerController@add');

//orderlines
Route::get('/datatimes/{id}',"HomeController@datatimes");
Route::post('/datatimes/{id}',"OrderLinesController@add");

//admin
Route::get('/admin','AdminController@index');
Route::get('/admin/services/create','AdminController@create');
Route::resource('/admin/services','ServiceController');
Route::resource('/admin/orders','OrderController');
Route::get('/admin/services/{{$service->id}}','ServiceController@edit');
