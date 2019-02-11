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



Route::get('/', 'DashboardController@index')->name("dashboard");

Route::name('dashboard')->prefix('students')->group(function(){
	
	Route::get('/new', "DashboardController@new");
	Route::post('/new', "DashboardController@add");
	Route::post('/getGroups', "DashboardController@getGroups");
	Route::post('/getResultOfSearch', "DashboardController@getResultOfSearch");

	Route::post('/delete', "DashboardController@delete");

	Route::get('/edit/{id}', "DashboardController@edit");
	Route::post('/edit/{id}', "DashboardController@edit_save");

});


Route::name('faculty')->prefix('faculty')->group(function(){
	
	Route::get('/', "FacultyController@index");

	Route::get('/new', "FacultyController@new");
	Route::post('/new', "FacultyController@add");

	Route::post('/delete', "FacultyController@delete");

	Route::get('/edit/{id}', "FacultyController@edit");
	Route::post('/edit/{id}', "FacultyController@edit_save");

});

Route::name('group')->prefix('group')->group(function(){
	
	Route::get('/', "GroupsController@index");

	Route::get('/new', "GroupsController@new");
	Route::post('/new', "GroupsController@add");

	Route::post('/delete', "GroupsController@delete");

	Route::get('/edit/{id}', "GroupsController@edit");
	Route::post('/edit/{id}', "GroupsController@edit_save");

});







// Route::get('/', function () {
//     return view('welcome');
// });
