<!-- create.blade.php -->

@extends('admin.layouts.default')
@section('admincontent')
    <div class="row-fluid sortable ui-sortable">
        @if($errors->any())
            <div class="atert alert-danger">
                <ul>
                   @foreach($errors->all() as $error)
                       <li>{{$error}}</li>
                   @endforeach
                </ul>
            </div>
        @endif
        @if(\Session::get('success'))
            <div class="atert atert-success">
                <p>{{\Session::get('success')}}</p>
            </div>
        @endif
        <div class="box blue span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Payment_method</h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
        <form class="form-horizontal" method="post" action="{{action('PaymentController@store')}}">
            {{csrf_field()}}
                <div class="control-group ">
                    <label style="color: black" class="control-label" for="selectError4">Payment Method</label>
                    <div class="controls">
                        <input name="payment_method" type="text" id="inputSuccess">
                        <!-- <span class="help-inline">Woohoo!</span> -->
                    </div>
                </div>

            <div class="control-group ">
                <label style="color: black" class="control-label" for="input">Payment Status</label>
                <div class="controls">

                    <div class="col-sm-10">
                        <select name="payment_status" id="">
                            <option value="" selected hidden>Select One</option>
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>


                    <!-- <span class="help-inline">Woohoo!</span> -->
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{url('admin/payment')}}" class="btn btn-info">Cancel</a>
            </div>
        </form>
    </div>
        </div>
</div>
@endsection
