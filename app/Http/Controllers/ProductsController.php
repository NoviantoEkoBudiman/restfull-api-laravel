<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = Product::all();
        return response()->json([
            'message' => 'Success',
            'data' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        Product::create([
            'products_name'         => $request->products_name,
            'products_price'        => $request->products_price,
            'products_description'  => $request->products_description,
            'product_images'        => $request->product_images
        ]);
        return response()->json([
            'Message' => 'Success',
            'Data' => $product,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $product = Product::find($id);
        return response()->json([
            'message' => 'Success',
            'data' => $product,
        ]);
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
        $product = Product::find($id);
        $product->update([
            'products_name'         => $request->products_name,
            'products_price'        => $request->products_price,
            'products_description'  => $request->products_description,
            'product_images'        => $request->product_images
        ]);
        return response()->json([
            'Message' => 'Success',
            'Data' => $product,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {        
        $product = Product::find($id);
        $product->delete();
        return response()->json(['Message' => 'Success']);
    }
}
