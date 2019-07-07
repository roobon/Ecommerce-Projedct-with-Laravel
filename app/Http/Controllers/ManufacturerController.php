<?php

namespace App\Http\Controllers;
use App\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $manufacturer = Manufacturer::all();

        return view('admin.manufacturer.index', compact('manufacturer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.manufacturer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manufacturer = new Manufacturer();
        $manufacturer->manufacturer_name = $request->get('manufacturer_name');
        $manufacturer->description = $request->get('description');
        $manufacturer->status = $request->get('status');
        $manufacturer->save();
        return redirect('admin/manufacturer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manufacturer = Manufacturer::find($id);

        return view('admin.manufacturer.edit', compact('manufacturer'));
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
           $manufacturer = Manufacturer::find($id);
        $manufacturer->manufacturer_name = $request->get('manufacturer_name');
        $manufacturer->description = $request->get('description');
        $manufacturer->status = $request->get('status');
        $manufacturer->save();
       
        return redirect('admin/manufacturer/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manufacturer =Manufacturer::find($id);
        $manufacturer->delete();

        return redirect('admin/manufacturer');
    }
}
