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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', ['as' => 'homepage', 'uses' => 'HomepageController@index']);
    Route::get('/giai-phap/{slug?}.html', ['as' => 'solution', 'uses' => 'SolutionController@detail']);
    Route::get('/hoat-dong', ['as' => 'activity', 'uses' => 'ActivityController@index']);
    Route::get('/hoat-dong/{slug}.html', ['as' => 'activity', 'uses' => 'ActivityController@detail']);
    Route::get('/ve-chung-toi', ['as' => 'aboutus', 'uses' => 'AboutusController@index']);
    Route::post('/customer-register', ['middleware' => 'throttle:2000,1', 'uses' => 'CustomerController@register']);
    Route::post('/customer-register-v2', ['middleware' => 'throttle:2000,1', 'uses' => 'CustomerController@registerV2']);
});
