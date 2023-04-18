<?php

namespace App\Http\Controllers;

use App\Models\AddProduct;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result=AddProduct::all();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new AddProduct();
        $product->name=$request->name;
        $product->filePath=$request->file("fileKey")->store("Products");
        $product->description=$request->description; 
        $product->price=$request->price;
        $product->save();
        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddProduct  $addProduct
     * @return \Illuminate\Http\Response
     */
    public function show(AddProduct $addProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddProduct  $addProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(AddProduct $addProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddProduct  $addProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddProduct $addProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddProduct  $addProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddProduct $addProduct)
    {
        //
    }
}
