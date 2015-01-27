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
	return View::make('registration/home');
});


Route::get('/register', function(){
	return View::make('registration/register');
});

Route::post('/register/save', 'RegistrationController@registerUser');



Route::get('/app', function(){
	return View::make('app/index');
});


/*Conference Info -- public pages*/
Route::get('/app/welcome', function(){ return View::make('app/welcome'); });
Route::get('/app/sessions', function(){ return View::make('app/sessions'); });
Route::get('/app/venue', function(){ return View::make('app/venue'); });
Route::get('/app/speakers', function(){ return View::make('app/speakers'); });
Route::get('/app/gallery', function(){ return View::make('app/gallery'); });

Route::get('/login', array('uses' => 'HomeController@showLogin'));
Route::post('/login', array('uses' => 'HomeController@doLogin'));
Route::get('/logout', array('uses' => 'HomeController@doLogout'));

/* My Conference -- private pages */
Route::get('/app/travel', array('before' => 'auth', function(){
	 return View::make('app/travel');
}));

Route::get('/app/agenda', array('before' => 'auth', function(){
	return View::make('app/agenda');
}));

Route::get('/app/waivers', array('before' => 'auth', function(){
	return View::make('app/waivers');
}));

Route::get('/app/surveys', array('before' => 'auth', function(){
	return View::make('app/surveys');
}));
