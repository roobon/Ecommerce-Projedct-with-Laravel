
@extends('admin.layouts.default')
@section('admincontent')
  

<div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                 
                  <th>Manufacturer Name</th>
                  <th>Description</th>
                  
                  
                </tr>
              </thead>   
              <tbody>
                @foreach($manufacturer as $manufacturer)
                
              <tr>
                
                <td class="center">{{$manufacturer->manufacturer_name}}</td>
                <td class="center">{{$manufacturer->description}}</td>
                
                <td class="center">
                  <a class="btn btn-success" href="#">
                    <i class="halflings-icon white zoom-in"></i>  
                  </a>
                  <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning"><i class="halflings-icon white edit"></i> </a>
                  
                  <form action="{{route('product.destroy',$product->id)}}" method="post">
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