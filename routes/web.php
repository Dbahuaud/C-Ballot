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

Route::get('/', 'IndexController@Form');
Route::post('/', 'IndexController@FormSubmit');
Route::post('/connect', 'IndexController@Connect');
Route::post('/disconnect', 'IndexController@Disconnect');
Route::get('/register/valid/{login}', 'IndexController@ValidReg');
Route::get('/register/delete/{login}', 'IndexController@DeleteReg');
Route::post('/update', 'IndexController@UpdateUser');