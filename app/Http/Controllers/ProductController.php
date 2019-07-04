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
        $new->category_id       = Input::get('category_id');
        $new->manufacturer_id       = Input::get('manufacturer_id');
        $new->product_name       = Input::get('product_name');
        $new->product_short_description       = Input::get('product_short_description');
        $new->product_long_description       = Input::get('product_long_description');
        $new->product_price       = Input::get('product_price');
        $new->product_image       = Input::get('product_image');
        $new->product_size       = Input::get('product_size');
        $new->product_color       = Input::get('product_color');
        $new->publication_status       = Input::get('publication_status');
       
        $new->save();

        // redirect
        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('admin/product');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
