@extends('admin.layouts.default')
@section('admincontent')
  

<div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th> Customer id</th>
                  <th>shipping id</th>
                  <th>payment id</th>
                  <th>Order Total</th>
                  <th>Order Status</th>
                  <th>Order Date&Time</th>
                  <th> Order Created</th>
                  <th>Order Updated</th> 
                  <th>Actions</th>
                </tr>
              </thead>   
              <tbody>
                @foreach($orders as $order)
                <tr>
                <td class="center">{{$order['order_id']}}</td>
                <td class="center">{{$order['customer_id']}}</td>
                <td class="center">{{$order['shipping_id']}}</td>
                <td class="center">{{$order['payment_id']}}</td>
                <td class="center">{{$order['order_total']}}</td>
                <td class="center">{{$order['order_status']}}</td>
                <td class="center">{{$order['order_date_time']}}</td>
                <td class="center">{{$order['created_at']}}</td>
                <td class="center">{{$order['updated_at']}}</td> 
                
                <td class="center">
                  <form action="{{action('OrderController@destroy', $order['order_id'])}}" method="post">
                    {{csrf_field()}}
                    <a class="btn btn-success" href="#">
                    <i class="halflings-icon white zoom-in"></i>  
                  </a>
                  <a class="btn btn-info" href="{{action('OrderController@edit', $order['order_id'])}}">
                    <i class="halflings-icon white edit"></i>  
                  </a>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit"><i class="halflings-icon white trash"></i></button>
                  </form>
                </td>
                  
                </tr>
                @endforeach
          
              </tbody>
             
            </table>            
          </div>
@stop