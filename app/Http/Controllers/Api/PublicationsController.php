<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publications;


class PublicationsController extends Controller
{
    public function index() 
   {
    $consulta = Publications::all();
    return $consulta;
   }

   public function store(Request $request) {
    

    $new_publication = new Publications();
    $new_publication -> name = $request -> name;
    $new_publication -> desc = $request -> desc;
    $new_publication -> img = $request -> img;
    
    $new_publication -> save();

   }

   public function show($id){

    $consulta_id = Publications::find($id);
    return $consulta_id;

   }

   public function update(Request $request, $id){ 

    $edit_publication = Publications::findOrFail($request -> id);
    $edit_publication -> name = $request -> name;
    $edit_publication -> desc = $request -> desc;
    $edit_publication -> img = $request -> img;

    $edit_publication -> save();

   }

   public function destroy($id) {
    $delete_publication = Publications::destroy($id);
    return $delete_publication;
   }

}
