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

// Guest User Routes...
Route::get('/',['as'=>'campaign.calculator','uses'=>'CampaignController@calculator']);
Route::post('/store',['as'=>'campaign.calculator.store','uses'=>'CampaignController@calculatorStore']);
Route::get('/results/{encoded_respondent_id}',['as'=>'campaign.calculator.results','uses'=>'CampaignController@calculatorResults']);

Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);

// Registration Routes...
// Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@showRegistrationForm']);
// Route::post('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@register']);

// Password Reset Routes...
// Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
// Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
// Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);

// Authenticated User Routes...
Route::get('dashboard',['as'=>'dashboard','uses'=>'HomeController@dashboard']);
Route::post('dashboard/exportcsv',['as'=>'exportcsv','uses'=>'HomeController@exportCsv']);
Route::post('dashboard/exportxls',['as'=>'exportxls','uses'=>'HomeController@exportXls']);
