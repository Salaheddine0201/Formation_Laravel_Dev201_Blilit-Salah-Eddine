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
Route::get('/posts/{id}/{livre?}', function ($id, $livre = null) {
    $post = [
        1 => ['title' => 'Laravel', 'livre' => 'Learn Laravel Framework'],
        2 => ['title' => 'React', 'livre' => 'Master React.js'],
        3 => ['title' => 'Vue', 'livre' => 'Build Apps with Vue.js'],
        4 => ['title' => 'Angular', 'livre' => 'Develop Apps with Angular'],
        5 => ['title' => 'Node', 'livre' => 'Learn Node.js with Examples'],
        6 => ['title' => 'PHP', 'livre' => 'PHP for Beginners'],
    ];

    $currentPost = $post[$id] ?? [];

    return view('posts.show', [
        'id'    => $id,
        'livre' => $livre,
        'post'  => $currentPost
    ]);
});
Route::get('/home', [HomeController::class, 'home'])->name('home');