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
    Route::get('/make-html', 'ReportsController@makeDirtyHtml');
    Route::get('/make-pdf', 'ReportsController@makeDirtyPdf');

});

//patterns
Route::group(['prefix' => 'patterns'], function(){
    //Decorator
    Route::get('/create-slot', 'SlotController@buildPatternSlot');

    //Strategy
    Route::get('/make-html', 'ReportsController@makeHtml');
    Route::get('/make-pdf', 'ReportsController@makePdf');

    //Factory
    Route::get('/factory', function(){
        return view('factory');
    });
    Route::get('/factory-dirty', function(){
        return view('factory-dirty');
    });

    //Observer
    Route::get('/observer', function(){
        return view('observer');
    });

    //Facade
    Route::get('/facade/add-member', 'CarPoolMembers@addMemberToParty');
    Route::get('/facade/order', 'CarPoolMembers@getMembers');
    Route::get('/facade', 'CarPoolMembers@index');

});

