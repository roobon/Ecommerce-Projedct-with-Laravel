<!-- index.blade.php -->
@extends('admin.layouts.default')
@section('admincontent')
  

<div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                  <th>Customer Username</th>
                  <th>Date registered</th>
                  <th>Customer E-mail</th>
                  <th>Cutomer Phone</th>
                  <th>Actions</th>
                </tr>
              </thead>   
              <tbody>
                 @foreach($allcustomer as $customer)
              <tr>
                <td>{{$customer['first_name']}} {{$customer['last_name']}}</td>
                <td class="center">{{$customer['created_at']}}</td>
                <td class="center">{{$customer['email_address']}}</td>
                <td class="center">{{$customer['telephone']}}</td>
                <td class="center">

                  <form  method="post" action="{{action('CustomerController@destroy', $customer['customer_id'])}}">
                    
                    <a class="btn btn-success" href="#">
                      <i class="halflings-icon white zoom-in"></i>  
                    </a>
                    <a class="btn btn-info" href="{{action('CustomerController@edit', $customer['customer_id'])}}">
                      <i class="halflings-icon white edit"></i>  
                    </a>

                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit"><i class="halflings-icon white trash"></i></button>
                  </form>

                </td>
              </tr>
               @endforeach
              </tbody>
            </table>            
          </div>
@stop