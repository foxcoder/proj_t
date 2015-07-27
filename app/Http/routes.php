<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::controllers ([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



/*
 * Project app
 */

//Route::get('projects', 'ProjectController@listAll');
Route::get('projects', '\App\Http\Controllers\pages\ProjectController@getProjects');
Route::get('projects/projform', '\App\Http\Controllers\pages\ProjectController@openProjectFrom');
Route::get('projects/editProject', '\App\Http\Controllers\pages\ProjectController@editProject');
Route::get('projects/projtimeline', '\App\Http\Controllers\pages\ProjectController@projecTimeline');

Route::post('projects/createProject', '\App\Http\Controllers\pages\ProjectController@projecTimeline');

