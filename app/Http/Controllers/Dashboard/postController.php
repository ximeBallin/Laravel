<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);
        return view('dashboard.fragment.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::pluck('title', 'id');
        $post = new Post();
        return view('dashboard.create', compact('categories', 'post'));
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500',
            'content' => 'required|min:7',
            'category_id' => 'required|integer',
            'description' => 'required|min:7',
            'posted' => 'required',
        ])->validate();

        Post::create($validated);
        return to_route('post.index');
    }

    public function show(Post $post)
    {
        return view('dashboard.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        $categories = Category::pluck('title', 'id');
        return view('dashboard.fragment.edit', compact('post', 'categories'));
    }

    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $filename = time() . '.' . $data['image']->extension();
            $request->image->move(public_path('uploads/post'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }

        $post->update($data);
        return to_route('post.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index');
    }
}
