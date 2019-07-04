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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{action('ProductController@update', $id)}}" method="post">
                            <fieldset>
                            	<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError4">Select Category</label>
								<div class="controls">
								  <select id="selectError3" name="publication_status" >
									<option value="" selected hidden>select one</option>
                                    
									<option value="{{$Cat->category_id}}" selected="">{{$Cat->category_name}}</option>
                                   
								  </select>
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError3">Select manufacturer</label>
								<div class="controls">

									<select id="selectError3" name="manufacturer_id">
										<option value="" selected hidden>select one</option>
										@foreach($allManufacturer as )
										<option value="{{ $manu->id }}"

										@if ($manu->id == old('manufacturer_id', $model->option))
										selected="selected"
										@endif
										>{{ $manu->manufacturer_name }}</option>
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
								<label style="color:black" class="control-label" for="prependedInput">product_long_description</label>
								<div class="controls">
								  <input name="product_price" type="text" id="inputSuccess" value="{{$product->product_long_description}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              
                              <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">product_image</label>
								<div class="controls">
								  <input name="product_image" type="text" id="inputSuccess">
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