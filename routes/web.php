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


// PROTECTOR
//
// Connection
Route::get('/connect', 'IndexController@NoFormRedirect');
// Disconnection
Route::get('/disconnect', 'IndexController@NoFormRedirect');
// Forgot password
Route::get('/forgot/', 'IndexController@NoFormRedirect');
// Change password
Route::get('/forgot/change/', 'IndexController@NoFormRedirect');
// Org updater
Route::get('/org/update/', 'IndexController@NoFormRedirect');


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
// User Delete account mail
Route::get('/user/delete/', 'IndexController@DeleteUser');
// User Delete valid link
Route::get('/user/delete/{unicode}', 'IndexController@DeleteUserValid');
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
// Send Invitation link
Route::post('/event/send/', 'IndexController@SendInvitationVote');
// Vote
Route::get('/event/{id}/{unicode}', 'IndexController@Vote');
// Vote submitted
Route::post('/event/vote', 'IndexController@VoteSend');
// Close event
Route::post('/event/close', 'IndexController@CloseEvent');
// Add participant during event
Route::get('/participant/{id}', 'IndexController@UpdateParticipant');
// Update submitted participant
Route::post('/participant/update', 'IndexController@ParticipantUpdater');


// ORGANIZATIONS
//
// Form submitted org create
Route::post('/org/create/', 'IndexController@FormSubmitOrg');
// Form org create
Route::get('/org/create/', 'IndexController@OrganizationCreate');
// Org list
Route::get('/org/', 'IndexController@OrgList');
// Org updater form by {Name}
Route::get('/org/update/{name}', 'IndexController@UpdateOrg');
// Org updater form submitted
Route::post('/org/update/', 'IndexController@OrganizationUpdate');
// Org deleter
Route::get('/org/delete/{name}', 'IndexController@DeleteOrg');
// Org deleter valid
Route::get('/org/delete/valid/{unicode}', 'IndexController@DeleterOrgValid');