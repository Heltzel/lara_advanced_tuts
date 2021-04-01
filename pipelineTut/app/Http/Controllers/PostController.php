<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index()
    {
        $posts =  Post::allPosts();
        return view('posts.index', ['posts' => $posts]);
    }
}
