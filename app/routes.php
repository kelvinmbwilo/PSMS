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






Route::resource('dashboard' , 'DashboardController');



//********************************************************/
//*********************DataView************************/
//********************************************************/
Route::get('dataview', array('uses'=>'DataViewController@index')); //display policedata



//*******************************************************//
//********************Offenses***************************//
//*******************************************************//
Route::get('offenses', array('uses' => 'OffenseController@index'));
Route::post('offenses/add', array('uses' => 'OffenseController@store'));
Route::get('offenses/add', array('uses' => 'OffenseController@addOffense'));