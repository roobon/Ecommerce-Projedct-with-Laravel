@extends('admin.layouts.default')
@section('admincontent')
 <div class="row-fluid sortable">		
				<div class="box blue span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Categories</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered">
						  <thead>
							  <tr>
								  <th>Category ID</th>
								  <th>Category Name</th>
								  <th>Catagory Description</th>
								  <th>Publication Status</th>
								  <th>Created at</th>
								  <th>Updated at</th>
								  <th colspan="2">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
@foreach($categorys as $category)
								<td class="center">{{$category['id']}}</td>
								<td class="center">{{$category['category_name']}}</td>
								<td class="center">{{$category['category_description']}}</td>
								<td class="center">{{$category['publication_status']}}</td>
								<td class="center">{{$category['created_at']}}</td>
								<td class="center">{{$category['updated_at']}}</td>
								 


								<td class="center">
									<form action="{{action('CategoryController@destroy', $category['id'])}}" method="post">
										{{csrf_field()}}
										<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="{{action('CategoryController@edit', $category['id'])}}">
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
 