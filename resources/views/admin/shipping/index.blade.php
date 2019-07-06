@extends('admin.layouts.default')
@section('admincontent')
  

      <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Shipping Address</th>
                  <th>Shipping Telephone</th>
                  <th>Shipping E-Mail</th>
                  <th>Created At</th>
                  <th>Actions</th>
                </tr>
              </thead>   
              <tbody>
                @foreach($allShipping as $shipping)
                
              <tr>
                <td class="center">{{$shipping->shipping_first_name}}</td>
                <td class="center">{{$shipping->shipping_last_name}}</td>
                <td class="center">{{$shipping->shipping_address}}</td>
                <td class="center">{{$shipping->shipping_telephone}}</td>
                <td class="center">{{$shipping->shipping_email}}</td>
                <td class="center">{{$shipping->created_at}}</td>
                <td class="center">
                  <a class="btn btn-success" href="#">
                    <i class="halflings-icon white zoom-in"></i>  
                  </a>
                  <a class="btn btn-info" href="{{action('ShippingController@edit', $shipping['id'])}}">
                    <i class="halflings-icon white edit"></i>  
                  </a>
                  <a class="btn btn-danger" href="{{url('shipping.destroy')}}">
                    <i class="halflings-icon white trash"></i> 
                  </a>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>            
      </div>
@stop