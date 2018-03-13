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

Route::get('/', 'IndexController@Index');

//Route::get('/', 'IndexController@Form');
Route::post('/', 'IndexController@FormSubmit');
Route::post('/connect', 'IndexController@Connect');
Route::post('/disconnect', 'IndexController@Disconnect');
Route::get('/register/valid/{unicode}', 'IndexController@ValidReg');
Route::get('/user/delete/{unicode}', 'IndexController@DeleteUser');
Route::get('/user/changepassword/{unicode}', 'IndexController@ChangePassword');
Route::get('/forgot/', 'IndexController@Forgot');
Route::post('/forgot/', 'IndexController@ForgotSubmit');
Route::post('/forgot/change/', 'IndexController@ChangePass');
//Route::get('/register/delete/{login}', 'IndexController@DeleteReg');
//Route::post('/update', 'IndexController@UpdateUser');