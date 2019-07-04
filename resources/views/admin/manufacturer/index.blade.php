@extends('admin.layouts.default')
@section('admincontent')
 <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Categories</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Manufacturer ID</th>
								  <th>Manufacturer Name</th>
								  <th>Status</th>
								  <th>Created at</th>
								  <th>Updated at</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach($manufacturer as $manufacturer)
							<tr>

								<td class="center">{{$Manufacturer['id']}}</td>
								<td class="center">{{$Manufacturer['manufacturer_name']}}</td>
								<td class="center">{{$Manufacturer['description']}}</td>
								<td class="center">{{$Manufacturer['status']}}</td>
								<td class="center">{{$Manufacturer['created_at']}}</td>
								<td class="center">{{$Manufacturer['updated_at']}}</td>
								 

								<td class="center">
									<form action="{{action('CategoryController@destroy', $category['id'])}}" method="post">
										{{csrf_field()}}
										<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
										<input type="hidden" name="_method" value="DELETE">
										<button class="btn btn-danger" type="submit"><i class="halflings-icon white trash"></i></button>
									</form>
								</td>
							</tr>
		                       @endforeach
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
	@stop
 