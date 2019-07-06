@extends('admin.layouts.default')
@section('admincontent')
    <div class="box-content">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Payment Methed</th>
            <th>Payment Status</th>
            <th>Payment Date & Time</th>
            <th>Create At</th>
            <th>Update At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
            <td>{{$payment->payment_id}}</td>
            <td>{{$payment->payment_method}}</td>
            <td>{{$payment->payment_status}}</td>
            <td>{{$payment->payment_date_time}}</td>
            <td>{{$payment->created_at}}</td>
            <td>{{$payment->updated_at}}</td>
                <td>
                    <a href="{{URL::to('admin/payment/show')}}" class="btn btn-success">
                        <i class="halflings-icon white zoom-in"></i>
                    </a>
                    <a href="{{URL::to('admin/payment/edit',$payment['payment_id'])}}" class="btn btn-info">
                        <i class="halflings-icon white edit"></i>
                    </a>
                    <a href="{{URL::to('admin/payment/delete')}}" class="btn btn-danger">
                        <i class="halflings-icon white trash"></i>
                    </a>
                </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@stop