<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::all()->take(3);
        return view('page.home', ['posts' => $posts]);
    }
    
}



