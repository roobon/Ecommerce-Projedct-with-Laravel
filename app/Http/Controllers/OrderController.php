<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all()->toArray();
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->customer_id = $request->get('customer_id');
        $order->shipping_id = $request->get('shipping_id');
        $order->payment_id = $request->get('payment_id');
        $order->order_total = $request->get('order_total');
        $order->order_status = $request->get('order_status');
        $order->order_date_time = $request->get('order_date_time');
        $order->created_at = $request->get('created_at');
        $order->updated_at = $request->get('updated_at');
        $order->save();

        return redirect('admin/order');
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
    public function edit($order_id)
    {
        $order = Order::find($order_id);
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $order_id)
    {
        $order = Order::find($order_id);
        $order->customer_id = $request->get('customer_id');
        $order->shipping_id = $request->get('shipping_id');
        $order->payment_id = $request->get('payment_id');
        $order->order_total = $request->get('order_total');
        $order->order_status = $request->get('order_status');
        $order->order_date_time = $request->get('order_date_time');
        $order->created_at = $request->get('created_at');
        $order->updated_at = $request->get('updated_at');

       $order->save();

        return redirect('admin/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($order_id)
    {
       $order = Order::find($order_id);
        $order->delete();

        return redirect('admin/order');
    }
}
