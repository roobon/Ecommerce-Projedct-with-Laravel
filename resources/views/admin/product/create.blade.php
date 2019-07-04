@extends('admin.layouts.default')
@section('admincontent')
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span24">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="{{ route('product.store') }}">
							 {{csrf_field()}}
                            <fieldset>
                            <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError4">Select Category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id" >
									<option value="" selected hidden>select one</option>
                                    @foreach($allProduct as $product)
									<option value="{{$product->category_id}}">{{$product->category->category_name}}</option>
                                    @endforeach
								  </select>
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError3">Select manufacturer</label>
								<div class="controls">
								  <select id="selectError3" name="manufacturer_id" >
									<option value="" selected hidden>select one</option>
                                    @foreach($allProduct as $product)
									<option value="{{$product->manufacturer_id}}">{{$product->manufacturer->manufacturer_name}}</option>
                                    @endforeach
								  </select>
								</div>
							  </div>
                            </fieldset>
							<fieldset>

						
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product name</label>
								<div class="controls">
								  <input name="product_name" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_short_description</label>
								<div class="controls">
								  <input name="product_short_description" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color: black" class="control-label" for="input">product_long_description</label>
								<div class="controls">                              
                              
                                    <div class="col-sm-10">
                                        <textarea name="product_long_description" id="textarea" class="form-control" rows="3" required="required"></textarea>
                                    </div>                            
                                
								  
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
                              </div>
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_price</label>
								<div class="controls">
								  <input name="product_price" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_image</label>
								
								<div class="controls">
									<input name="product_image" id="" type="file" >								  
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_size</label>
								<div class="controls">
								  <input name="product_size" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_color</label>
								<div class="controls">
								  <input name="product_color" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              
                      
							  <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError3">publication status</label>
								<div class="controls">
								  <select id="selectError3" name="publication_status" >
									<option value="" selected hidden>select one</option>
									<option value="1">published</option>
									<option value="0">draft</option>
									
								  </select>
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