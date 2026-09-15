<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all()
    {
        return Category::with('posts')->get();
    }

    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:categories',
        ]);

        return Category::create($request->all());
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:categories,slug,' . $category->id,
        ]);

        $category->update($request->all());
        return $category;
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Categoria eliminada con éxito']);
    }
}
