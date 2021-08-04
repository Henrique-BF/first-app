<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Resources\UserCollection;


class BlogController extends Controller
{
    
    public function index()
    {
        $posts = Post::orderBy('id' , 'desc')->paginate(2);
        return View('blog.index',['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return View('blog.show', ['post' => $post]);
    }
    
}