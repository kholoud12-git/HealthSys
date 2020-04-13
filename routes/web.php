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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //->namespace('Person') if all controller in folder called Person
// Route::group(['middleware'=>['person']],function(){ });
Route::prefix('/person')->group(function()
{
    Route::match(['get','post'],'/','PersonController@login');
   
        Route::get('personHome','PersonController@showPerson');
    
});

Route::post('login','PersonController@login');
Route::get('Loginperson','PersonController@showLoginForm');

//Route::get('personShow','PersonController@showPerson');
Route::get('logout','PersonController@logout');

