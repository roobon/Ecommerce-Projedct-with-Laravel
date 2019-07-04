@extends('admin.layouts.default')
@section('admincontent')
<div class="row-fluid sortable ui-sortable">
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>create category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="{{url('admin/category')}}">
							{{csrf_field()}}
							<fieldset>
						
							  <div class="control-group ">
								<label style="color:black" class="control-label" for="prependedInput">category name</label>
								<div class="controls">
								  <input name="category_name" type="text" id="inputSuccess">
								  <!-- <span class="help-inline">Woohoo!</span> -->
								</div>
							  </div>
                              <div class="control-group ">
								<label style="color: black" class="control-label" for="input">category description</label>
								<div class="controls">
                                
                              
                                    <div class="col-sm-10">
                                        <textarea name="category_description" id="textarea" class="form-control" rows="3" required="required"></textarea>
                                    </div>
                                
                                
								  
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