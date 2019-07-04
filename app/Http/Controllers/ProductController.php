<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $allProduct=Product::all();   

        
        return view('admin.product.index', compact('allProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allProduct=Product::all(); 
        return view('admin.product.create',compact('allProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store
        $new = new Product;
        $new->category_id       = $request->get('category_id');
        $new->manufacturer_id       = $request->get('manufacturer_id');
        $new->product_name       = $request->get('product_name');
        $new->product_short_description       = $request->get('product_short_description');
        $new->product_long_description       = $request->get('product_long_description');
        $new->product_price       = $request->get('product_price');
        $new->product_image       = $request->get('product_image');
        $new->product_size       = $request->get('product_size');
        $new->product_color       = $request->get('product_color');
        $new->publication_status       = $request->get('publication_status');
       
        $new->save();

        // redirect
        
     return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       $product = Product::find($id);

        return view('admin.product.create', compact('product','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
     
        $new = Product::find($id);
        $new->category_id       = $request->get('category_id');
        $new->manufacturer_id       = $request->get('manufacturer_id');
        $new->product_name       = $request->get('product_name');
        $new->product_short_description       = $request->get('product_short_description');
        $new->product_long_description       = $request->get('product_long_description');
        $new->product_price       = $request->get('product_price');
        $new->product_image       = $request->get('product_image');
        $new->product_size       = $request->get('product_size');
        $new->product_color       = $request->get('product_color');
        $new->publication_status       = $request->get('publication_status');
       
        $new->save();
        
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
         $new = Product::find($id);
        $new->delete();

        return redirect('admin/product');
    }
}
