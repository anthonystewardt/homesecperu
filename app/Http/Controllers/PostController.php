<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('published', true)
                    ->orderBy('created_at', 'desc')
                    ->paginate(5);

        $categories = Category::all();

        return view('blog.index', ["posts" => $posts, "categories" => $categories]);
    }

    public function showAdminPost() {
        $posts = Post::paginate();

        return view('dashboard/blog', ["posts" => $posts]);
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
    public function show(Post $post)
    {
        // get 3 posts randoms
        $posts = Post::where('published', true)
                    ->where('id', '!=', $post->id)
                    ->inRandomOrder()
                    ->limit(3)
                    ->get();

        return view('blog.show', ["post" => $post, "posts" => $posts]);
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
    public function destroy(Post $post)
    {
        dd($post);
    }
}