
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

                @foreach($manufacturer as $manufact)
                
              <tr>
                
                <td class="center">{{$manufact->manufacturer_name}}</td>
                <td class="center">{{$manufact->description}}</td>
                
                <td class="center">
                  <a class="btn btn-success" href="#">
                    <i class="halflings-icon white zoom-in"></i>  
                  </a>
                  <a href="{{route('manufacturer.edit',$manufact->id)}}" class="btn btn-warning"><i class="halflings-icon white edit"></i> </a>
                  
                  <form style="display: inline-block;" action="{{route('manufacturer.destroy',$manufact->id)}}" method="post">
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