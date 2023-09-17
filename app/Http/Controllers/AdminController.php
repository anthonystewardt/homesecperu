<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showPost(){

        // session()->flash('swal', [
        //     "icon" => "error",
        //     "title" => "Oops! Something went wrong",
        //     "text" => "we have a problem",
        //     "footer" => "<a href=''>why do i have this issue</a>"
        // ]);

        $posts = Post::latest('id')->paginate();


        return view('dashboard/blog', ["posts" => $posts]);
    }


    public function editPost(Post $post){
        $categories = Category::all();
        return view('dashboard.blog.edit',  ["post" => $post, "categories" => $categories]);
    }

    public function updatePost(Request $request, Post $post) {
        $request->validate([
            // "image" => 'required',
            "name" => 'required|max:120',
            "slug" => "required|unique:posts,slug,$post->id",
            "extract" => "required|max:255",
            "body" => "required",
            "category_id" => "required",
            "image" => "nullable|image"
        ]);
        // return $request->all();
        if($request->file('image')){

            // eliminar imagen anterior
            if($post->image_path){
                Storage::delete($post->image_path);
            }

            $post->image_path = Storage::put("posts", $request->image);
        }

        $post->title = $request->name;
        $post->slug = $request->slug;
        $post->extract = $request->extract;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->published = $request->published == "on" ? true : false;
        $post->save();
         session()->flash('swal', [
            "icon" => "success",
            "title" => "Yehh! Se actualizó el Post ",
            "text" => "El postha sido modificado correctamente",
            "footer" => ""
        ]);
        return redirect()->route('dashboard.blog');
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

    public function createPost(){
        $categories = Category::all();


        return view('dashboard.blog.create', [
            "categories" => $categories
        ]);
    }

    public function storePost(Request $request) {
        $request->validate([
            // "image" => 'required',
            "name" => 'required|max:120',
            "slug" => "required|unique:posts",
            "extract" => "required|max:255",
            "body" => "required",
            "category_id" => "required",
            "image" => "nullable|image"
        ]);

        $post_image_path = Storage::put("posts", $request->image);
        $post = Post::create([
            "title" => $request->name,
            "slug" => $request->slug,
            "extract" => $request->extract,
            "body" => $request->body,
            "category_id" => $request->category_id,
            "user_id" => auth()->user()->id,
            "published" => $request->published == "on" ? true : false,
            "image" => $post_image_path,
        ]);


        session()->flash('swal', [
            "icon" => "success",
            "title" => "Yehh! Se creó el Post ",
            "text" => "El post se creó correctamente",
            "footer" => ""
        ]);

        return redirect()->route('dashboard.blog');
    }

    public function deletePost(Post $post) {
        $post->delete();
        return redirect()->route('dashboard.blog');
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