<?php

namespace App\Http\Controllers;

use App\Models\Contacto;       
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request; 

class ContactoController extends Controller
{
   
    public function index()
    {
        $consulta = Contacto::all();
        return $consulta;
    }

    public function store(Request $request)
    {
        $new_contacto = new Contacto();
        $new_contacto -> Nombre = $request -> Nombre;
        $new_contacto -> Telefono = $request -> Telefono;
        $new_contacto -> Correo = $request -> Correo;
        $new_contacto -> Mensaje = $request -> Mensaje;
        
        $new_contacto -> save();

        Mail::to('BrownBoost@gmail.com')
        ->send(new ContactanosMailable($request->all()));

        session()->flash('info','Mensaje enviado');

    }

    public function show(Contacto $contacto)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        $edit_contacto = Contacto::findOrFail($request->id);
        $edit_contacto -> Nombre = $request -> Nombre;
        $edit_contacto -> Telefono = $request -> Telefono;
        $edit_contacto -> Correo = $request -> Correo;
        $edit_contacto -> Mensaje = $request -> Mensaje;



        $edit_contacto -> save();
    }

    
    public function destroy(Contacto $id)
    {
    
        $delete_contacto = Contacto::destroy($id);
        return $delete_contacto;
    }
}
