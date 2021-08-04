<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('page.home', ['posts' => $posts]);
    }
    
}



