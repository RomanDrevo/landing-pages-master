<?php


Route::group(["prefix" => "landing"], function(){
	
	Route::post('getuserip', 'LandingController@getIp');
	Route::post('verifyemail', 'LandingController@validateEmail');
    Route::post('tracking', 'TrackingController@storeLead');


	Route::get('{stoken}', 'SourceController@show');
	Route::post('{stoken}', 'SourceController@store');




});

Route::get('/thank-you', 'ThankyouPageController@redirect');

Route::group(["middleware" => "auth", "prefix" => "admin"], function(){

	Route::get('landings', 'AdminController@indexLanding');
	Route::post('landings', 'AdminController@storeLanding');

    Route::put('landings/update/{name}', 'AdminController@updateLanding');


    Route::get('landings/create', 'AdminController@createLanding');
    Route::get('landings/edit/{name}', 'AdminController@editLanding');

    Route::delete('landings/delete/{name}', 'AdminController@destroyLanding');




    Route::get('sources', 'AdminController@indexSource');
    Route::post('sources', 'AdminController@storeSource');

    Route::put('sources/update/{id}', 'AdminController@updateSource');


    Route::get('sources/create', 'AdminController@createSource');
    Route::get('sources/edit/{id}', 'AdminController@editSource');

    Route::get('sources/activate/{id}', 'AdminController@toggleActiveStatus');

    Route::get('sources/addLogo/{id}', 'AdminController@toggleLogoDisplay');


    Route::delete('sources/delete/{id}', 'AdminController@destroySource');





});

Auth::routes();

