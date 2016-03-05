<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('satellite/', 'SatelliteController@home');
Route::get('satellite/{id}', 'SatelliteController@single');
Route::get('satellite/{id}/modify', 'SatelliteController@modify');
Route::get('satellite/{id}/history', 'SatelliteController@history');
Route::resource('api/satellite', 'SatelliteController');


Route::get('spaceport/', 'SpaceportController@home');
Route::get('spaceport/{id}', 'SpaceportController@single');
Route::get('spaceport/{id}/modify', 'SpaceportController@modify');
Route::get('spaceport/{id}/history', 'SpaceportController@history');
Route::resource('api/spaceport', 'SpaceportController');


Route::get('component/', 'ComponentController@home');
Route::get('component/{id}', 'ComponentController@single');
Route::get('component/{id}/modify', 'ComponentController@modify');
Route::get('component/{id}/history', 'ComponentController@history');
Route::resource('api/component', 'ComponentController');


Route::get('vendor/', 'VendorController@home');
Route::get('vendor/{id}', 'VendorController@single');
Route::get('vendor/{id}/modify', 'VendorController@modify');
Route::get('vendor/{id}/history', 'VendorController@history');
Route::resource('api/vendor', 'VendorController');

Route::get('mission/', 'MissionController@home');
Route::get('mission/{id}', 'MissionController@single');
Route::get('mission/{id}/modify', 'MissionController@modify');
Route::get('mission/{id}/history', 'MissionController@history');
Route::resource('api/mission', 'MissionController');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
