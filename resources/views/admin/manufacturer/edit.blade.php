@extends('admin.layouts.default')
@section('admincontent')
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Manufacturer</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{route('manufacturer.update', ['id' => $manufacturer->id])}}" method="post">
							{{csrf_field()}}
                            	<input name="_method" type="hidden" value="PATCH">
							<fieldset>
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">manufacturer name</label>
								<div class="controls">
								  <input name="manufacturer_name" type="text" id="inputSuccess" value="{{$manufacturer->manufacturer_name}}">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color: black" class="control-label" for="input">Description</label>
								<div class="controls">
                                
                              
                                    <div class="col-sm-10">
                                        <textarea name="description" id="textarea" class="form-control" rows="3" required="required">{{$manufacturer->description}}</textarea>
                                    </div>
                                
                                
								  
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                      
							  <div class="control-group ">
								<label style="color: black" class="control-label" for="selectError3">Status</label>
								<div class="controls">
								  <select id="selectError3" name="status" >
									<option value="" selected hidden>select one</option>
									<option value="1" {{($manufacturer->status==1) ? 'selected' : ''   }}>published</option>
									<option value="0" {{($manufacturer->status==0) ? 'selected' : ''   }}>draft</option>
									
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