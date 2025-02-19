<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function posts($id) {
        $posts = [
            1 => ['title' => 'Laravel'],
            2 => ['title' => 'PHP'],
            3 => ['title' => 'JavaScript'],
            4 => ['title' => 'Vue.js'],
            5 => ['title' => 'React.js'],
            6 => ['title' => 'Angular'],
           
        ];
    
        return view('posts.show', [
            'data' => $posts[$id] ?? 'Post not found'
        ]);
    }
}
