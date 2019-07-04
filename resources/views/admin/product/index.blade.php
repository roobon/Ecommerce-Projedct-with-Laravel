
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
                  <a href="{{action('ProductController@edit', $product['id'])}}" class="btn btn-warning"><i class="halflings-icon white edit"></i> </a>
                  
                  <form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
                  {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                 <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                 
                  
                    
                  
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>            
          </div>
@stop