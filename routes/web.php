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

// INDEX ROUTE
Route::get('/', 'IndexController@Index')->name('index');


// USER
//
// Register Submitted form
Route::post('/', 'IndexController@RegSubmit');
// Connect submitted form
Route::post('/connect', 'IndexController@Connect');
// Disconnect submitted button
Route::post('/disconnect', 'IndexController@Disconnect');
// E-mail validation account link
Route::get('/register/valid/{unicode}', 'IndexController@ValidReg');
// User Delete account
Route::get('/user/delete/{unicode}', 'IndexController@DeleteUser');
// Change Password Form new password input
Route::get('/user/changepassword/{unicode}', 'IndexController@ChangePassword');
// Change Password Form new password input submitted
Route::post('/forgot/change/', 'IndexController@ChangePass');
// Change Password Form E-Mail input
Route::get('/forgot/', 'IndexController@Forgot');
// Change Password Form E-Mail input submitted
Route::post('/forgot/', 'IndexController@ForgotSubmit');

//Route::get('/register/delete/{login}', 'IndexController@DeleteReg');
//Route::post('/update', 'IndexController@UpdateUser');

// Create Event Form input
Route::get('/event/add/', 'IndexController@AddEvent');
// Create Event Form submitted
Route::post('/event/create/', 'IndexController@CreateEvent');
// Organisation Event's list
Route::get('/event/{Org}/', 'IndexController@OrgEvent');