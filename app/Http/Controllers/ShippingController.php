<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shippings;
class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allShipping=Shippings::all();   
        return view('admin.shipping.index')->with('allShipping', $allShipping);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shipping = Shippings::all();
        return view('admin.shipping.create')->with('shipping', $shipping);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $shipp = new Shippings;
       $shipp->shipping_first_name = $request->shipping_first_name;//get('title')
       $shipp->shipping_last_name = $request->shipping_last_name;
       $shipp->shipping_address = $request->shipping_address;
       $shipp->shipping_telephone = $request->shipping_telephone;
       $shipp->shipping_email = $request->shipping_email;
       $shipp->save();
       return Redirect()->route('shipping.index');
       // return view('admin.shipping.create');
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
    public function edit($shipping_id)
    {
        $shipping = Shippings::find($shipping_id);
        
        return view('admin.shipping.edit', compact('shipping'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $shipping_id)
    {
        $shipp = Shippings::find($shipping_id);
        $shipp->shipping_first_name = $request->shipping_first_name;//get('title')
        $shipp->shipping_last_name = $request->shipping_last_name;
        $shipp->shipping_address = $request->shipping_address;
        $shipp->shipping_telephone = $request->shipping_telephone;
        $shipp->shipping_email = $request->shipping_email;
        $shipp->save();
        return view('admin.shipping.create');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($shipping_id)
    {
        $shipping = Shippings::find($shipping_id);
        $shipping->delete();

        return Redirect()->route('shipping.index');
        // return view('admin.shipping.create');
    }
}