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

Route::get('/', function () {
    return view('index');
});

//dirty
Route::group(['prefix' => 'dirty'], function(){
    Route::get('/create-slot', 'SlotController@buildDirtySlot');

});

//patterns
Route::group(['prefix' => 'patterns'], function(){
    Route::get('/create-slot', 'SlotController@buildPatternSlot');
    Route::get('/make-html', 'ReportsController@makeHtml');
    Route::get('/make-pdf', 'ReportsController@makePdf');
});

Route::get('/car-pool/driver', 'CarPoolMembers@getDriver');
Route::get('/car-pool/members', 'CarPoolMembers@getMembers');
Route::get('/car-pool', 'CarPoolMembers@index');
