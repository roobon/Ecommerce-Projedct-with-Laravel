@extends('admin.layouts.default')
@section('admincontent')
<div class="row-fluid sortable ui-sortable">
	@if ($errors->any())
          	<div class="alert alert-danger">
              	<ul>
                  	@foreach ($errors->all() as $error)
                      	<li>{{ $error }}</li>
                  	@endforeach
              	</ul>
          	</div>
        @endif

        @if (\Session::get('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
				<div class="box blue span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Create Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('admin/category')}}" method="post">
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
                                        <textarea name="category_description" id="textarea" class="form-control" rows="3"></textarea>
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