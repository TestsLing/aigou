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

// 后台
Route::group([],function(){
	// 后台首页
	Route::get('admin/index','Admin\IndexController@index');

	// 后台用户
	Route::resource('admin/user','Admin\UserController');



});
	


// 前台
