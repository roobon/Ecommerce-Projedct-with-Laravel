@extends('admin.layouts.default')
@section('admincontent')
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>create shiping</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{action('ShippingController@store')}}" method="post">
							{{csrf_field()}}
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">First Name</label>
								<div class="controls">
								  <input name="shipping_first_name" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Last Name</label>
								<div class="controls">
								  <input name="shipping_last_name" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color: black" class="control-label" for="input">Shipping Address</label>
								<div class="controls">
                                    <div class="col-sm-10">
                                        <textarea name="shipping_address" id="textarea" class="form-control" rows="3" required="required"></textarea>
                                    </div>
								</div>
							  </div>
                      
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Shipping Telephone</label>
								<div class="controls">
								  <input name="shipping_telephone" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">Shipping E-Mail</label>
								<div class="controls">
								  <input name="shipping_email" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>

							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save</button>
								<a href="{{url('admin/shipping')}}" class="btn">Cancel</a>
							  </div>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div>


@stop