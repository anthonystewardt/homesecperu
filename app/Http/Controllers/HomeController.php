<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        // get 3 posts
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('welcome', ['sliders' => $sliders, 'posts' => $posts]);
    }

    public function about() {

        return view('about');
    }


    public function projects() {
        $projects = Photo::all();

        return view('projects', ['projects' => $projects]);

    }


}
