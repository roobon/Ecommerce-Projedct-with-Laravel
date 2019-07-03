<!-- index.blade.php -->
@extends('admin.layouts.default')
@section('admincontent')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>Customer E-mail</th>
        <th>Customer Phone</th>
      </tr>
    </thead>
    <tbody>
      @foreach($allcustomer as $customer)
      <tr>
        <td>{{$customer['first_name']}} {{$customer['last_name']}}</td>
        <td>{{$customer['email_address']}}</td>
        <td>{{$customer['telephone']}}</td>
      </tr>

      @endforeach
    </tbody>
  </table>
  </div>
@stop