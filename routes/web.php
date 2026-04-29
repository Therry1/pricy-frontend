<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.client_pages.home');
});

Route::view('/connexion', 'pages.client_pages.login')->name('client.login');
Route::view('/inscription', 'pages.client_pages.register')->name('client.register');
Route::view('/gestion', 'pages.gestion_pages.dashboard')->name('gestion.dashboard');


Route::view('/welcome', 'welcome');
