<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id','title');

        return view('dashboard.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        //$validated = Validator::make($rquest->all(), [
          //  'title' => 'required|min:5|max:500',
            //'slug' => 'required|min:5|max:500',
            //'content' => 'required|min:7',
            //'category_id' => 'required|integer',
            //'description' => 'required|min:7',
            //'posted' => 'required',
        //]);

        //dd($validated->fails());

        Post::create($request->all());

        return to_route('post.index');

        //Post::create([
        //'title' => $request->all()['title'],
        //'slug' => $request->all()['slug'],
        //'content' => $request->all()['content'],
        //'category_id' => $request->all()['category_id'],
        //'description' => $request->all()['description'],

        //'image' => $request->all()['image'],
        //]);
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
    public function edit(string $id)
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
