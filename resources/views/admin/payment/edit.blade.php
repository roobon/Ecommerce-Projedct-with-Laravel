<!-- create.blade.php -->

@extends('admin.layouts.default')
@section('admincontent')
    <div class="row-fluid sortable ui-sortable">
        <div class="box blue span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Payment_method</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" method="post" action="{{action('PaymentController@update', $payment->payment_id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="control-group ">
                        <label style="color: black" class="control-label" for="selectError4">Payment Method</label>
                        <div class="controls">
                            <input name="payment_method" type="text" id="inputSuccess" value="{{$payment->payment_method}}">
                            <!-- <span class="help-inline">Woohoo!</span> -->
                        </div>
                    </div>

                    <div class="control-group ">
                        <label style="color: black" class="control-label" for="input">Payment Status</label>
                        <div class="controls">

                            <div class="col-sm-10">
                                <select name="payment_status" id="" value="{{$payment->payment_status}}">
                                    <option value="" selected hidden>Select One</option>
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            </div>
                            <!-- <span class="help-inline">Woohoo!</span> -->
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button class="btn">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
