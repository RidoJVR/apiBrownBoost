<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index()
    {
        $consulta = Users::all();
        return $consulta;
    }

    
    public function store(Request $request)
    {
        $new_user = new Users();
        $new_user -> name = $request -> name;
        $new_user -> lastname = $request -> lastname;
        $new_user -> address = $request -> address;
        $new_user -> email = $request -> email;
        $new_user -> password = $request -> password;
        $new_user -> phone = $request -> phone;
        
    }

    
    public function show($id)
    {
        $consulta_id = Users::find($id);
        return $consulta_id;
    }

    
    public function update(Request $request, $id)
    {
        $edit_user = Users::findOrFail($request -> id);
        $edit_user -> name = $request -> name;
        $edit_user -> lastname = $request -> lastname;
        $edit_user -> address = $request -> address;
        $edit_user -> email = $request -> email;
        $edit_user -> password = $request -> password;
        $edit_user -> phone = $request -> phone;
        
    }

    
    public function destroy($id)
    {
        $delete_user = Users::destroy($id);
        return $delete_user;
    }
}
