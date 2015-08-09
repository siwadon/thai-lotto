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

if (in_array(Request::segment(1), Config::get('app.languages'))) {
    App::setLocale(Request::segment(1));
    Config::set('app.locale', Request::segment(1));
}

Route::get('/', 'PrizeController@index');

Route::get('result/{date?}', 'PrizeController@index');

Route::group(array('prefix' => 'th'), function()
{
    Route::get('/', 'PrizeController@index');

    Route::get('result/{date?}', [
        'as' => 'result_th',
        'uses' => 'PrizeController@result'
    ]);
});

Route::group(array('prefix' => 'en'), function()
{
    Route::get('/', 'PrizeController@index');

    Route::get('result/{date?}', [
        'as' => 'result_en',
        'uses' => 'PrizeController@result'
    ]);
});

Route::get('all', 'PrizeController@list_all');

Route::get('sitemap{extension}', 'SitemapController@index');

Route::group(array('prefix' => 'api'), function()
{
    Route::get('dates/{limit?}', [
        'as'   => 'api_date_list',
        'uses' => 'PrizeController@list_dates'
    ]);
    Route::get('result/{date?}', [
        'as'   => 'api_result',
        'uses' => 'PrizeController@result_json'
    ]);
});
