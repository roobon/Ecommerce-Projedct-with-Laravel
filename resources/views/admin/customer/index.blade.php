<!-- index.blade.php -->
@extends('admin.layouts.default')
@section('admincontent')
  
<a href="http://127.0.0.1:8000/admin/customer/create" class="btn btn-primary btn-lg btn-block">Create New Customer</a>
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
                  <a class="btn btn-success" href="#">
                    <i class="halflings-icon white zoom-in"></i>  
                  </a>
                  <a class="btn btn-info" href="#">
                    <i class="halflings-icon white edit"></i>  
                  </a>
                  <a class="btn btn-danger" href="#">
                    <i class="halflings-icon white trash"></i> 
                  </a>
                </td>
              </tr>
               @endforeach
              </tbody>
            </table>            
          </div>
@stop