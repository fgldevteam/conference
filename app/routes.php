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

Route::get('/activities', function(){
	return View::make('activity-preview');
});


Route::get('/app', function(){
	return View::make('app/index');
});


Route::controller('/password', 'RemindersController');

//
// Route::get('/app/password/reset', array('uses' => 'RemindersController@getRemind'));
// Route::post('/app/password/reset', array('uses' => 'RemindersController@postRemind'));
//
// Route::get('/app/password/reset/{token}', array(
// 	'uses' => 'PasswordController@reset',
// 	'as' => 'password.reset'
// ));

// Route::resource('/app/password', 'RemindersController', array(
// 	'only' => array('getRemind', 'postRemind', 'getReset', 'postReset')
// ));




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
Route::get('/app/activity-selection', array('before' => 'auth', 'uses' => 'ConfSessionController@index'));
Route::post('/app/activity-selection', array('before' => 'auth', 'uses' => 'ConfSessionController@saveActivitySelection'));
Route::get('/app/activity-selection-done', array('before' => 'auth', function(){
	return View::make('app/activity-selection-done');
}));

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
