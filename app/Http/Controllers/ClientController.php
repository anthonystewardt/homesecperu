<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::paginate(4);


        return view('dashboard.clients.index', [
            'clients' => $clients
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'names' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'surnames' => 'required'
        ]);
        $client = Client::create($request->all());

        session()->flash('swal', [
            "icon" => "success",
            "title" => "Su mensaje se ha enviado correctamente",
            "text" => "Gracias por contactarnos, nos pondremos en contacto con usted lo antes posible",
            "footer" => "Home Security Perú"
        ]);

        return redirect()->route('thanks');
    }

    public function edit(Client $client) {
        return view('dashboard.clients.edit', [
            'client' => $client
        ]);
    }

    public function update(Request $request, Client $client ){

        $client->update($request->all());
        session()->flash('swal', [
            "icon" => "success",
            "title" => "El cliente se ha actualizado correctamente",
            "text" => "El cliente se ha actualizado correctamente",
            "footer" => "Home Security Perú"
        ]);
        return redirect()->route('dashboard.clients');

    }

    public function destroy(Client $client) {
        $client->delete();
        session()->flash('swal', [
            "icon" => "success",
            "title" => "El cliente se ha eliminado correctamente",
            "text" => "El cliente se ha eliminado correctamente",
            "footer" => "Home Security Perú"
        ]);
        return redirect()->route('dashboard.clients');
    }



    public function thanks() {
        return view('gracias');
    }
}