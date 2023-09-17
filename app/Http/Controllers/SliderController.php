<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function showSlider(){

        $photos = Slider::all();
        return view('dashboard.slider.index', ['photos' => $photos]);
    }


    public function createSlider(){
        return view('dashboard.slider.create');
    }


    public function storeSlider(Request $request){
        $image = Slider::create([
            'image' => $request->image
        ]);

        $photos = Slider::all();

         session()->flash('swal', [
            "icon" => "success",
            "title" => "Yehh! Se creó su foto",
            "text" => "La foto se creó correctamente en el Slider",
            "footer" => ""
        ]);
        return redirect()->route('dashboard.slider', ['photos' => $photos]);

    }

    public function editSlider(Slider $slider){

        return view('dashboard.slider.edit', ['photo' => $slider]);
    }


    public function updateSlider(Request $request, Slider $slider){
        $request->validate([
            'image' => 'required'
        ]);

        $slider->update([
            'image' => $request->image
        ]);

        $photos = Slider::all();
         session()->flash('swal', [
            "icon" => "success",
            "title" => "Yehh! Se ha actualizado su foto",
            "text" => "La foto se actualizó correctamente en el Slider",
            "footer" => ""
        ]);
        return redirect()->route('dashboard.slider', ['photos' => $photos]);
    }

    public function deleteSlider(Slider $slider){
        $slider->delete();
        $photos = Slider::all();
         session()->flash('swal', [
            "icon" => "success",
            "title" => "Yehh! Se ha eliminado su foto",
            "text" => "La foto se eliminó correctamente en el Slider",
            "footer" => ""
        ]);
        return redirect()->route('dashboard.slider', ['photos' => $photos]);

    }

}