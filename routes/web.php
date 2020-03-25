<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {

    Route::get('dashboard', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);
    Route::get('dashboard/search', ['as' => 'dashboard.search', 'uses' => 'DashboardController@search']);

    Route::get('addresses', ['as' => 'addresses', 'uses' => 'AddressController@index']);
    Route::get('addresses/{address}', ['as' => 'addresses.show', 'uses' => 'AddressController@show']);

    Route::get('residents', ['as' => 'residents', 'uses' => 'ResidentController@index']);
    Route::get('residents/{resident}', ['as' => 'residents.show', 'uses' => 'ResidentController@show']);
    Route::get('residents/{resident}/edit', ['as' => 'residents.edit', 'uses' => 'ResidentController@edit']);
    Route::put('residents/{resident}', ['as' => 'residents.update', 'uses' => 'ResidentController@update']);
    
});