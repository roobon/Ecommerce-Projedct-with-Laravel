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
                <form method="post" action="{{action('PaymentController@destroy', $payment->payment_id)}}">
                    <a href="#" class="btn btn-success">
                        <i class="halflings-icon white zoom-in"></i>
                    </a>
                    <a href="{{action('PaymentController@edit', $payment->payment_id)}}" class="btn btn-info">
                        <i class="halflings-icon white edit"></i>
                    </a>
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger"><i class="halflings-icon white trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@stop