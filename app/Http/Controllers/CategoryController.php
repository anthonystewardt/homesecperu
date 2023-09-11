<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate();
        return view('dashboard.categories.index', [
            "categories" => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
        ]);

        $category = Category::create([
            "name" => $request->name,
        ]);

        session()->flash('swal', [
            "icon" => "success",
            "title" => "Yehh!!",
            "text" => "Se ha creado la categoria correctamente"
        ]);

        return redirect()->route('dashboard.categories');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {


        return view('dashboard.categories.edit', [
           "category" => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            "name" => "required|string|max:255",
        ]);

        $category->update([
            "name" => $request->name,
        ]);

        session()->flash('swal', [
            "icon" => "success",
            "title" => "Yehh!!",
            "text" => "Se ha actualizado la categoria correctamente"
        ]);

        return redirect()->route('dashboard.categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->exists();

        if($posts) {
            session()->flash('swal', [
            "icon" => "error",
            "title" => "Ups!!",
            "text" => "No se puede eliminar la categía, tiene posts asociados"
        ]);
        return redirect()->route('dashboard.categories');

        }

        $category->delete();

        session()->flash('swal', [
            "icon" => "success",
            "title" => "Yehh!!",
            "text" => "Se ha eliminado la categoria correctamente"
        ]);

        return redirect()->route('dashboard.categories');
    }
}