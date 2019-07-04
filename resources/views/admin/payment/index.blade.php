@extends('admin.layouts.default)
@section('admincontent')
    <table>
        <tr>
            <th>ID</th>
            <th>Payment Methed</th>
            <th>Payment Status</th>
            <th>Action</th>
        </tr>
        <tr>
            @foreach($payments as $payment)
            <td>{{$payment->payment_id}}</td>
            <td>{{$payment->payment_method}}</td>
            <td>{{$payment->payment_status}}</td>
            <td>{{$payment->payment_date_time}}</td>
                <td>
                    <a href="" class="btn btn-success">
                        <i class="halflings-icon white zoom-in"></i>
                    </a>
                    <a href="" class="btn btn-info">
                        <i class="halflings-icon white edit"></i>
                    </a>
                    <a href="" class="btn btn-danger">
                        <i class="halflings-icon white trash"></i>
                    </a>
                </td>
            @endforeach
        </tr>
    </table>
@stop