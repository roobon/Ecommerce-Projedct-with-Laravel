
@extends('admin.layouts.default')
@section('admincontent')
  

<div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                  <th>Image</th>
                  <th> Name</th>
                  <th>manufacturer</th>
                  <th>category</th>
                  <th>price</th>
                  <th>size</th>
                  <th>color</th>
                  <th>Actions</th>
                </tr>
              </thead>   
              <tbody>
                @foreach($allProduct as $product)
                
              <tr>
                <td><img src="{{$product->product_image}}" alt="" class="img-responsive"></td>
                <td class="center">{{$product->product_name}}</td>
                <td class="center">{{$product->manufacturer->manufacturer_name}}</td>
                <td class="center">{{$product->category->category_name}}</td>
                <td class="center">{{$product->product_price}}</td>
                <td class="center">{{$product->product_size}}</td>
                <td class="center">{{$product->product_color}}</td>
                <td class="center">
                  <a class="btn btn-success" href="#">
                    <i class="halflings-icon white zoom-in"></i>  
                  </a>
                  <a class="btn btn-info" href="{{ URL::to('admin/product/' . $product->id . '/edit') }}">
                    <i class="halflings-icon white edit"></i>  
                  </a>
                  <a class="btn btn-danger" href="{{url('product.destroy')}}">
                    <i class="halflings-icon white trash"></i> 
                  </a>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>            
          </div>
@stop