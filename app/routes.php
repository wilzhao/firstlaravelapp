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
	return 'hello!';
	//return View::make('hello');
});

Route::get('/first',function(){
	return 'first!';
});

Route::get('/add-book',function(){
	$data = 'Add a new book';
	$data .= '<form method = "POST" action = "/add-book">';
	$data .= '<input type = "text" name = "title"><input type = "submit">';
	$data .= '</form>';
	return $data;
});