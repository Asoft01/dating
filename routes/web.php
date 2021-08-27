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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view('coming-soon');
// });

// Front Routes 
Route::get('/', 'IndexController@index');

Route::any('/register', 'UsersController@register');
Route::any('/step/2', 'UsersController@step2');
Route::any('/review', 'UsersController@review');

Route::any('/login', 'UsersController@login');
Route::any('/logout', 'UsersController@logout');

Route::get('/check-email', 'UsersController@checkEmail');

Route::match(['get', 'post'], '/admin', 'AdminController@login');

// Route::get('/logout', 'AdminController@logout');
Route::get('/admin/logout', 'AdminController@logout');


Route::group(['middleware' => ['adminlogin']], function(){
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/settings', 'AdminController@settings');
    Route::get('/admin/check-pwd', 'AdminController@chkPassword');
    Route::match(['get', 'post'], '/admin/update-pwd', 'AdminController@updatePassword');


    // Users Routes
    Route::get('admin/view-users', 'UsersController@viewUsers');
    Route::post('admin/update-user-status', 'UsersController@updateUserStatus');

});
