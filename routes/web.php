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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/Admin', 'Admin\AdminController@index');
Route::get('/adduser', function () {
    return view("Admin.adduser");
});
Route::post('/submit/adduser', 'Admin\AdminController@adduser');
Route::get('/deleteuser/{id}', 'Admin\AdminController@deleteuser');
Route::get('/updateuser/{id}','Admin\AdminController@updatauser');
Route::post('/submit/saveUpdateuser','Admin\AdminController@saveUpdateuser');

