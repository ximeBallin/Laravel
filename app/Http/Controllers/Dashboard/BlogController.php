<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);
        return view('dashboard.blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('dashboard.blog.show', compact('post'));
    }
}
