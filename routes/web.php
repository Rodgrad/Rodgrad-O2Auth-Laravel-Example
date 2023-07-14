<?php

use Illuminate\Support\Facades\Route;

use Laravel\Socialite\Facades\Socialite;
 




Route::get('/auth/redirect', "App\Http\Controllers\GitHubController@redirect");
 
Route::get('/auth/github/callback', "App\Http\Controllers\GitHubController@index");


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
