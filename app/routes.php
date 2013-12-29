<?php

Route::get('/logo', function () {
  return View::make('logo');
});

Route::get('/', function()
{
	return View::make('home');
});


