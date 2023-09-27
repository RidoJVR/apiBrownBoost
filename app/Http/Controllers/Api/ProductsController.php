<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta = Products::all();
        return $consulta;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_product = new Products();
        $new_product -> title = $request -> title;
        $new_product -> description = $request -> description;
        $new_product -> price = $request -> price;
        $new_product -> instock = $request -> instock;

        $new_product -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consulta_id = Products::find($id);
        return $consulta_id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit_product = Products::findOrFail($request->id);
        $edit_product -> title = $request -> title;
        $edit_product -> description = $request -> description;
        $edit_product -> price = $request -> price;
        $edit_product -> instock = $request -> instock;


        $edit_product -> save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_product = Products::destroy($id);
        return $delete_product;
    }
}
