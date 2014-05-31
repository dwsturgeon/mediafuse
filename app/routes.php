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


facebook api key
app id: 1419892034956322
app secret: fee7429fc8f2c38ea9bfdd9db1f1c193
*/


Route::get('/', function()
{
	return View::make('hello');
});
