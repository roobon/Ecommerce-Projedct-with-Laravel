@extends('admin.layouts.default')
@section('admincontent')
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Create order</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('admin/order')}}" method="post">
							{{csrf_field()}}
							<fieldset>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Customer Id</label>
								<div class="controls">
								  <input name="customer_id" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              
                      
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">shipping Id</label>
								<div class="controls">
								  <input name="shipping_id" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>


							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Payment Method</label>
								<div class="controls">
								  <select name="payid" id="">
								  	<option value="">Select one</option>
								  		@foreach($payments as $payment)
									<option value="{{$payment['payment_id']}}">{{$payment['payment_method']}}</option>
								  		@endforeach
								  	

								  </select>

								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>


							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Order Total</label>
								<div class="controls">
								  <input name="order_total" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Order status</label>
								<div class="controls">
								  <input name="order_status" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>

							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Order date</label>
								<div class="controls">
								  <input name="order_date_time" type="date" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>

							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">created_at</label>
								<div class="controls">
								  <input name="created_at" type="date" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">updated at</label>
								<div class="controls">
								  <input name="updated_at" type="date" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>





















							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div>


@stop