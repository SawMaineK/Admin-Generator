<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/

Route::resource('users', 'UserController');

Route::get('users/{id}/delete', [
    'as' => 'admin.users.delete',
    'uses' => 'UserController@destroy',
]);


Route::resource('gcms', 'GcmController');

Route::get('gcms/{id}/delete', [
    'as' => 'admin.gcms.delete',
    'uses' => 'GcmController@destroy',
]);
