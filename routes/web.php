<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::welcome.index')->name('welcome');


Route::get('/welcome', function () {
	return view('welcome');
});
