@extends('admin.layouts.default')
@section('admincontent')

<div class="box span12">
	<div class="box-header" data-original-title="">
		<h2><i class="halflings-icon user"></i><span class="break"></span>Categories</h2>
		<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
		</div>
	</div>
	<div class="box-content">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div></div>

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
	<div class="row-fluid"><div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="span12 center"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>            
	</div>
</div>
				
@stop