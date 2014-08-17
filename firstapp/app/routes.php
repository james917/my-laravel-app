<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', function()
{
	// Schema::create('art', function($newtable)
	// {
	// 	$newtable->increments('id');
	// 	$newtable->string('artist');
	// 	$newtable->string('title',500);
	// 	$newtable->text('dscription');
	// 	$newtable->date('created');
	// 	$newtable->date('exhibition_date');
	// 	$newtable->timestamps();
	// });

	return View::make('hello');
});

// Route::get('about/directions', function()
// {
// 	return 'About Directions goes here.';
// });


// Route::get('about/{theSubject}', function($theSubject)
// {
// 	return $theSubject."About {$theSubject} goes here.";
// });