@extends('admin.layouts.default')
@section('admincontent')

<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{route('product.update', ['id' => $product->id])}}" method="post" enctype="multipart/form-data">
                            <fieldset>
                            	{{csrf_field()}}
                            	<input name="_method" type="hidden" value="PATCH">
                            	
                            <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError4">Select Category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id" >
									<option value="" selected hidden>select one</option>
                                    @foreach($allCategory as $Cat)
									<option value="{{$Cat->id}}" {{( $Cat->id == $product->category_id) ? 'selected' : ''   }}  >{{$Cat->category_name}}</option>
                                  	 @endforeach
								  </select>
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError3">Select manufacturer</label>
								<div class="controls">

									<select id="selectError3" name="manufacturer_id">
										<option value="" selected hidden>select one</option>
										@foreach($allManufacturer as $manu)
										<option value="{{ $manu->id }}" {{($manu->id == $product->manufacturer_id) ? 'selected' : ''   }} >{{ $manu->manufacturer_name }}</option>
										@endforeach
									</select>
								  
								</div>
							  </div>
                            </fieldset>
							<fieldset>

						
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product name</label>
								<div class="controls">
								  <input name="product_name" type="text" id="inputSuccess" value="{{$product->product_name}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_short_description</label>
								<div class="controls">
								  <input name="product_short_description" type="text" id="inputSuccess" value="{{$product->product_short_description}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color: black" class="control-label" for="input">product_long_description</label>
								<div class="controls">                              
                              
                                    <div class="col-sm-10">
                                        <textarea name="product_long_description" id="textarea" class="form-control" rows="3" required="required">{{$product->product_long_description}}</textarea>
                                    </div>                            
                                
								  
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
                              </div>
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_Price</label>
								<div class="controls">
								  <input name="product_price" type="text" id="inputSuccess" value="{{$product->product_price}}">
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
								  <input name="product_size" type="text" id="inputSuccess" value="{{$product->product_size}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_color</label>
								<div class="controls">
								  <input name="product_color" type="text" id="inputSuccess" value="{{$product->product_color}}">
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