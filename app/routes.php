<?php

Route::get('/animations/{animation}', 'AnimationController@display')
->where('animation', '(everywhere-usa|forest-moon|squares-and-triangles)');

Route::get('/web-apps/redalytics', function() {
  return View::make('web_apps/redalytics/index');
});

Route::post('/contact', 'ContactController@sendMessage');

Route::get('/', function() {
	return View::make('home');
});


