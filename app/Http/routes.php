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



/*
 * Test part
 */
Route::get('/', function () {


    return view('welcome');
});



Route::get('/go/contact', 'WelcomeController@goToContactPage');

/*nav to page*/
//Route::get('/about',"PageController@goToAboutPage" );


/*
 * Project app
 */

//Route::get('projects', 'ProjectController@listAll');
Route::get('projects', '\App\Http\Controllers\pages\ProjectController@listAll');
Route::get('projects/projform', '\App\Http\Controllers\pages\ProjectController@openProjectFrom');
