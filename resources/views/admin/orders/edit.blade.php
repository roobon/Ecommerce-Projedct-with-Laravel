@extends('admin.layouts.default')
@section('admincontent')
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Order Edit</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{action('OrderController@update', $order['order_id'])}}" method="post">
							{{csrf_field()}}
							<fieldset>
							<input type="hidden" name="_method" value="PATCH">
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">customer name</label>
								<div class="controls">
								  <input name="customer_name" type="text" id="inputSuccess" value="{{$order['customer_name']}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>


							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Shipping Name</label>
								<div class="controls">
								  <input name="shipping_name" type="text" id="inputSuccess" value="{{$order['shipping_name']}}">
								</div>
							  </div>



							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Payment Method</label>
								<div class="controls">
								  <input name="payment_method" type="text" id="inputSuccess" value="{{$order['payment_method']}}">
								</div>
							  </div>



							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Order Total</label>
								<div class="controls">
								  <input name="order_total" type="text" id="inputSuccess" value="{{$order['order_total']}}">
								</div>
							  </div>



                             <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Order Status</label>
								<div class="controls">
								  <input name="order_status" type="text" id="inputSuccess" value="{{$order['order_status']}}">
								</div>
							  </div>

							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Order Date&Time</label>
								<div class="controls">
								  <input name="order_date" type="text" id="inputSuccess" value="{{$order['order_date']}}">
								</div>
							  </div>

                           <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Order Created</label>
								<div class="controls">
								  <input name="created_at" type="text" id="inputSuccess" value="{{$order['created_at']}}">
								</div>
							  </div>

                           <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Order Updated</label>
								<div class="controls">
								  <input name="updated_at" type="text" id="inputSuccess" value="{{$order['updated_at']}}">
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