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
/*
*访问后台
*/
Route::get('/Admin', 'Admin\AdminController@index');
/*
*访问前台
*/
Route::get('/Home', 'Home\HomeController@index');
/*
*调用添加用户页面
*/
Route::get('/adduser', function () {
    return view("Admin.adduser");
});
/*
*提交添加用户的信息
*/
Route::post('/submit/adduser', 'Admin\AdminController@adduser');
/*
*删除用户
*/
Route::get('/deleteuser/{id}', 'Admin\AdminController@deleteuser');
/*
*修改用户信息页面与添加用户页面相同
*/
Route::get('/updateuser/{id}','Admin\AdminController@updatauser');
/*
*提交修改用户信息
*/
Route::post('/submit/saveUpdateuser','Admin\AdminController@saveUpdateuser');
/*
*前台登录页面
*/
Route::get('/Home/login','Home\HomeController@login');
/*
*跳转至登录保存用户id方法
*/
Route::post('/Home/login-add','Home\HomeController@loginAdd');
/*
*退出
*/
Route::get('/Home/out','Home\HomeController@out');
/*
*注册
*/
Route::get('/Home/singUp','Home\HomeController@singUp');
/*
*执行注册
*/
Route::post('/Home/addSingUp','Home\HomeController@addSingUp');
/*
*提交注册码
*/
Route::post('/Home/addSingUp_2','Home\HomeController@addSingUp_2');
