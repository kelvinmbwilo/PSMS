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

Route::get('map', function()
{
    return View::make('map');
});

Route::get('recently', function()
{
    return View::make('recently');
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

//displaying all the datas entered by this user
Route::get('user/data/{id}', array('uses' => 'UserController@userDataSpecific'));




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

//displaying vehicle type offences
Route::get('vehicle', array('uses' => 'OffenseController@vehicle'));

//displaying bicycle type offenses
Route::get('bicycle', array('uses' => 'OffenseController@bicycle'));

//adding offense to the database
Route::post('offenses/add', array('uses' => 'OffenseController@store'));

//getting the add offense interface
Route::get('offenses/add', array('uses' => 'OffenseController@addOffense'));

//displaying the list of all offenses
Route::get('list', array('uses' => 'OffenseController@listOffense'));

//displaying the list of all officers in the database
Route::get('officers', array('uses' => 'OffenseController@officers'));

//displaying data specific to certain offenses
Route::get('data/{id}', array('uses' => 'OffenseController@dataSpecific'));



//*******************************************************//
//********************Reports***************************//
//*******************************************************//
Route::get('offence_reports',array('uses'=>'GeneralController@index'));

Route::get('accident_reports',array('uses'=>'AccidentReportController@index'));

Route::post('reports/download',array('uses'=>'GeneralController@excelDownload'));

//displaying table chart
Route::post('report/general/table',array('uses'=>'GeneralController@makeTable'));

//displaying bar chart
Route::post('report/general/bar',array('uses'=>'GeneralController@makeBar'));

//displaying column chart
Route::post('report/general/column',array('uses'=>'GeneralController@makeColumn'));

//displaying combined chart
Route::post('report/general/combined',array('uses'=>'GeneralController@makeCombined'));

//displaying combined chart
Route::post('report/general/pie',array('uses'=>'GeneralController@makePie'));

//displaying line chart
Route::post('report/general/line',array('uses'=>'GeneralController@makeLine'));




//*******************************************************//
//********************Cars***************************//
//*******************************************************//
Route::get('cars', array('uses' => 'CarController@index'));

//displaying data specific to certain car including all the offenses ever registered
Route::get('cars/{id}', array('uses' => 'CarController@dataSpecific'));


//*******************************************************//
//********************License***************************//
//*******************************************************//
Route::get('lisence', array('uses' => 'LisenceController@index'));
Route::get('license/data/{id}', array('uses' => 'LisenceController@licenseSpecificData'));


