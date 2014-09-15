<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('dashboard');
});

Route::get('dashboard', function()
{
    return View::make('dashboard');
});


Route::get('statistics', function()
{
    return View::make('statistics');
});



Route::resource('dashboard' , 'DashboardController');



//********************************************************/
//*********************DataView************************/
//********************************************************/
Route::get('dataview', array('uses'=>'DataViewController@index')); //display policedata



//********************************************************/
//*********************User************************/
//********************************************************/
Route::get('user', array('uses'=>'UserController@index')); //display list of users
Route::get('user/add', array('uses'=>'UserController@create')); //add users
Route::post('user/add', array('uses'=>'UserController@store')); //processing added users
Route::get('user/delete/{id}', array('uses'=>'UserController@destroy')); //add users
Route::get('user/edit/{id}', array('uses'=>'UserController@update')); //edit users
Route::post('user/edit/{id}', array('uses'=>'UserController@edit')); //process edited users
Route::get('userindex', array('uses'=>'UserController@index'));//displaying messages




//********************************************************/
//*********************Login************************/
//********************************************************/
Route::get('login', array('uses'=>'LoginController@index')); //display login form
Route::post('login', array('uses'=>'LoginController@login')); //process login form
Route::get('logout', array('uses'=>'LoginController@logout')); //process logout functionality


//*******************************************************//
//********************Offenses***************************//
//*******************************************************//
Route::get('offenses', array('uses' => 'OffenseController@index'));
Route::get('vehicle', array('uses' => 'OffenseController@vehicle'));
Route::get('bicycle', array('uses' => 'OffenseController@bicycle'));
Route::post('offenses/add', array('uses' => 'OffenseController@store'));
Route::get('offenses/add', array('uses' => 'OffenseController@addOffense'));