<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;


class CommentsController extends Controller
{
   
    public function index()
    {
        $consulta = Comments::all();
        return $consulta;
    }

    public function store(Request $request)
    {
        $new_comments = new Comments();
        $new_comments -> comment = $request -> comment;
        $new_comments -> publication = $request -> publication;
        $new_comments -> qualification = $request -> qualification;
        
        $new_comments -> save();
    }

    public function update(Request $request, $id)
    {
        $edit_comments = Comments::findOrFail($request->id);
        $edit_comments -> comment = $request -> comment;
        $edit_comments -> publication = $request -> publication;
        $edit_comments -> qualification = $request -> qualification;
        


        $edit_comments -> save();

    }

    public function destroy($id)
    {
        $delete_comment = Comments::destroy($id);
        return $delete_comment;
    }

}
