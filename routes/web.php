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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
//

//Route::any('register', function(){  }); // important to stop registration from admin

Route::get('home', 'HomeController@index')->name('admin.dashboard');


Route::group(['middleware' => 'admin.auth'], function() {
	Route::get('/service-delivery', 'ServiceDeliveryController@index')->name('service-delivery');

	Route::get('/service-delivery/show/{bookingId}', 'ServiceDeliveryController@show')->name('service-delivery-show');
	Route::post('/service-delivery/filter', 'ServiceDeliveryController@filter')->name('service-delivery-filter');

	Route::get('/accidental-delivery', 'AccidentalDeliveryController@index')->name('accidental-delivery');
	Route::get('/accidental-delivery/show/{bookingId}', 'AccidentalDeliveryController@show')->name('accidental-delivery-show');
	Route::get('/accidental-history', 'AccidentalDeliveryController@history')->name('accidental-history');
	Route::get('/accidental-history/show/{bookingId}', 'AccidentalDeliveryController@historyShow')->name('accidental-history-show');

	Route::get('/active-asset-client', 'HomeController@activeAssetClient')->name('active-asset-client');
	Route::get('/active-asset-client/show/{assetNo}', 'HomeController@activeAssetClientShow')->name('active-asset-client-show');

	Route::get('termination-of-asset/{assetNo}', ['as' => 'termination.asset', 'uses' => 'HomeController@terminationAsset']);

	Route::get('book-value-chart', ['as' => 'admin.bookValueChart.index', 'uses' => 'HomeController@bookValueChart']);
});







