<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;


class BlogController extends Controller
{
    
    public function index()
    {
        return View('blog.index');
    }

    public function show(Post $post)
    {
        return View('blog.show', ['post' => $post]);
    }
    
}