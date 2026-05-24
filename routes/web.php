<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::welcome.index')->name('welcome');
Route::livewire('/auth/login', 'pages::auth.login')->name('login')->middleware('guest');

Route::middleware(['auth'])->prefix('dashboard')->group(function () {

	// Dashboard Route
	Route::livewire('/', 'pages::dashboard.index')->name('dashboard');
	Route::livewire('/overview', 'pages::dashboard.index')->name('dashboard.overview');

	// Links Group
	Route::prefix('links')->group(function () {
		Route::livewire('/manage', 'pages::dashboard.links.index')->name('links.manage');
		Route::livewire('/setting', 'pages::dashboard.links.setting')->name('links.setting');
	});

	// Blog Group
	Route::prefix('blog')->group(function () {
		Route::livewire('/manage', 'pages::dashboard.blog.index')->name('blog.manage');
	});

	// Monetize Group
	Route::prefix('monetize')->group(function () {
		Route::livewire('/manage', 'pages::dashboard.monetize.index')->name('monetize.manage');
	});

	// Setting Group
	Route::prefix('setting')->group(function () {
		Route::livewire('/manage', 'pages::dashboard.setting.index')->name('setting.manage');
	});

	// Documentation
	Route::prefix('docs')->group(function () {
		Route::get('/', function () {
			return view('pages.docs.index');
		});
		Route::livewire('/color', 'pages::docs.color')->name('docs.color');
	});
});
