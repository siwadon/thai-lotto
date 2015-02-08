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

Route::get('/', 'PrizeController@index');

Route::get('result/{date?}', [
    'as' => 'result',
    'uses' => 'PrizeController@result'
]);

Route::get('all', 'PrizeController@list_all');


Route::group(array('prefix' => 'api'), function()
{
    Route::get('dates', 'PrizeController@list_dates');
});
