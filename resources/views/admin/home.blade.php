@extends('admin.layouts.default')

@section('admincontent')
<div></div>
	<div class="row-fluid">	

				<a class="quick-button metro yellow span2">
					<i class="icon-group"></i>
					<p>Users</p>
					<span class="badge">237</span>
				</a>
				<a class="quick-button metro red span2">
					<i class="icon-comments-alt"></i>
					<p>Comments</p>
					<span class="badge">46</span>
				</a>
				<a class="quick-button metro blue span2">
					<i class="icon-shopping-cart"></i>
					<p>Orders</p>
					<span class="badge">13</span>
				</a>
				<a class="quick-button metro green span2">
					<i class="icon-barcode"></i>
					<p>Products</p>
				</a>
				<a class="quick-button metro pink span2">
					<i class="icon-envelope"></i>
					<p>Messages</p>
					<span class="badge">88</span>
				</a>
				<a class="quick-button metro black span2">
					<i class="icon-calendar"></i>
					<p>Calendar</p>
				</a>

				<a class="quick-button metro yellow span2">
					<i class="icon-group"></i>
					<p>Customer</p>
					<span class="badge">237</span>
				</a>

				<a class="quick-button metro yellow span2">
					<i class="icon-group"></i>
					<p>Manufacturer</p>
					<span class="badge">237</span>
				</a>
				
				<div class="clearfix"></div>
								
			</div>
			<br><!--/row-->

			<div class="">
				

				
				<img class="img-fluid" style="width:100%;" src="{{ URL::to('backend/img/administrator.jpg') }}">
				
				
				
			</div>
@stop