<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {

        $photos = Photo::all();

        return view('dashboard.gallery.index', [
            'photos' => $photos
        ]);
    }

    public function create()
    {
        return view('dashboard.gallery.create');
    }

    public function store(Request $request){
        $request->validate([
            'path_image' => 'required',
            'path_url' => 'required'
        ]);

        $photo = Photo::create([
            'path_image' => $request->path_image,
            'path_url' => $request->path_url
        ]);
        $photo->save();

         session()->flash('swal', [
            "icon" => "success",
            "title" => "Yehh! Se creó su foto ",
            "text" => "La foto se creó correctamente",
            "footer" => ""
        ]);

        return redirect()->route('dashboard.gallery.index');
    }


    public function edit(Photo $photo) {

        return view('dashboard.gallery.edit', [
            'photo' => $photo
        ]);
    }


    public function update(Photo $photo, Request $request) {

        $request->validate([
            'path_image' => 'required',
            'path_url' => 'required'
        ]);

        $photo->update([
            'path_image' => $request->path_image,
            'path_url' => $request->path_url
        ]);

        session()->flash('swal', [
            "icon" => "success",
            "title" => "Yehh! Se actualizó su foto ",
            "text" => "La foto se actualizó correctamente",
            "footer" => ""
        ]);

        return redirect()->route('dashboard.gallery.index');

    }

    public function destroy(Photo $photo){

            $photo->delete();

            session()->flash('swal', [
                "icon" => "success",
                "title" => "Yehh! Se eliminó su foto ",
                "text" => "La foto se eliminó correctamente",
                "footer" => ""
            ]);

            return redirect()->route('dashboard.gallery.index');
    }


}