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

Route::get('/', 'IndexController@Index')->name('index');

//Route::get('/', 'IndexController@Form');
Route::post('/', 'IndexController@FormSubmit');
Route::post('/connect', 'IndexController@Connect');
Route::get('/connect', 'IndexController@NoFormRedirect');
Route::post('/disconnect', 'IndexController@Disconnect');
Route::get('/disconnect', 'IndexController@NoFormRedirect');
Route::get('/register/valid/{unicode}', 'IndexController@ValidReg');
Route::get('/user/delete/{unicode}', 'IndexController@DeleteUser');
Route::get('/user/changepassword/{unicode}', 'IndexController@ChangePassword');
Route::get('/forgot/', 'IndexController@Forgot');
Route::post('/forgot/', 'IndexController@ForgotSubmit');
Route::get('/forgot/', 'IndexController@NoFormRedirect');
Route::post('/forgot/change/', 'IndexController@ChangePass');
Route::get('/forgot/change/', 'IndexController@NoFormRedirect');
//Route::get('/register/delete/{login}', 'IndexController@DeleteReg');
//Route::post('/update', 'IndexController@UpdateUser');
Route::post('/org/create/', 'IndexController@FormSubmitOrg');
Route::get('/org/create/', 'IndexController@NoFormRedirect');
Route::get('/org/', 'IndexController@OrgList');
Route::get('/org/update/{name}', 'IndexController@UpdateOrg');
Route::post('/org/update/', 'IndexController@OrganizationUpdate');
Route::get('/org/update/', 'IndexController@NoFormRedirect');
Route::get('/org/delete/{name}', 'IndexController@DeleteFirstLink');
