<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/* Route::get('/', function () {
    return view('welcome');

});
Route::get('/about', function () {
    return view('about');

}); */

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::get('/posts/{id}/{livre?}', [HomeController::class, 'posts'])->name('posts');
Route::get('/home', [HomeController::class, 'home'])->name('home');