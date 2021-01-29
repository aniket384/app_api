<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


///////// Auth Method Routes
Route::group([
    'middleware' => 'api'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('profile', 'AuthController@profile');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink','ResetPasswordController@sendEmail');
});


///////// Insert Method Routes
Route::group([
    'middleware' => 'api'
], function ($router) {

    /////// Messege Routes
    Route::post('add-messege', 'MessegeController@addMessege');
    Route::get('view-messeges', 'MessegeController@viewMessege');

    /////// Project Routes
    Route::post('add-project', 'ProjectController@addProject');
    Route::get('view-project', 'ProjectController@viewProject');

});






