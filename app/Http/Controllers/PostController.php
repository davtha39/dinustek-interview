<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Pst::with('categories')->get();
        return view('posts.index', compact('posts'));
    }
}
