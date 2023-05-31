<?php

namespace App\Http\Controllers;

use App\Models\Post;   //import the model Post
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index', 
        ['posts' => Post::latest()->paginate()]);
    }
}
