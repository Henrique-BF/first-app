<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('page.home', ['posts' => $posts]);
    }
    
}



