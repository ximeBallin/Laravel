<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $post = Post::find(1);
        dd($category->category->title);
        //return response()->json([
           // 'name' => 'Abigail',
            //'state' => 'CA',
        //]);

        // $post = Post::find(2)->delete();
        // dd($post);

        // $post = Post::find(3);
        // $post->update([
        //     'title' => 'New Title 3',
        //     'slug' => 'slug-3',
        // ]);
        // dd($post);

        // $posts = Post::get();
        // foreach ($posts as $key => $post) {
        //     echo $post->title . '<br>';
        // }
        // dd($posts);

        // $post = Post::create([
        //     'title' => 'Test Title',
        //     'slug' => 'test-slug',
        //     'description' => 'Test Description',
        //     'content' => 'Test Content',
        //     'posted' => 'yes',
        //     'category_id' => 1
        // ]);
        // dd($post);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
