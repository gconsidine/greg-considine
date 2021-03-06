<?php

Route::get('/animations/{animation}', 'AnimationController@display')
->where('animation', '(everywhere-usa|forest-moon|squares-and-triangles)');

/* Route/filter asynchronous request on contact form submission */
Route::group(['before' => 'csrf'], function () {
  Route::post('/contact', 'ContactController@sendMessage');
});

/* Unused subdomain catch-all, redirect to home */
Route::group(['domain' => '{inactiveSubdomain}.greg-considine.com'], function () {
  Route::get('/', function () {
    return Redirect::to('http://greg-considine.com');
  });
});

/* Catch-all/home route */
Route::get('/', function() {
	return View::make('home');
});


