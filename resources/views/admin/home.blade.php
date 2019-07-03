@extends('admin.layouts.default')

@section('admincontent')
	<div class="row-fluid">	

				<a class="quick-button metro yellow span1" style="width: 90px; height: 122px">
					<i class="icon-group"></i>
					<p>Users 237</p>
				</a>
				<a class="quick-button metro red span1" style="width: 110px; height: 122px">
					<i class="icon-comments-alt"></i>
					<p>Comments 46</p>
				</a>
				<a class="quick-button metro blue span1" style="width: 110px; height: 122px">
					<i class="icon-shopping-cart"></i>
					<p>Orders 13</p>
				</a>
				<a class="quick-button metro green span1" style="width: 110px; height: 122px">
					<i class="icon-barcode"></i>
					<p>Products</p>
				</a>
				<a class="quick-button metro pink span1" style="width: 110px; height: 122px">
					<i class="icon-envelope"></i>
					<p>Messages 88</p>
				</a>
				<a class="quick-button metro black span1" style="width: 110px; height: 122px">
					<i class="icon-calendar"></i>
					<p>Calendar</p>
				</a>
				<a class="quick-button metro yellow span1" style="width: 110px; height: 122px">
					<i class="icon-group"></i>
					<p>Customers 237</p>
				</a>
				<a class="quick-button metro yellow span1" style="width: 110px; height: 122px">
					<i class="icon-group"></i>
					<p>Menufecturer 50</p>
				</a>
				
				<div class="clearfix"></div>
								
			</div>
			<br><!--/row-->

			<div class="">
				<h1 style="text-align: center; color:blue;">Welcome to Admin Panel</h1>

				
				<img class="img-fluid" style="width:100%;" src="{{ URL::to('backend/img/administrator.jpg') }}">
				
				
				
			</div>
@stop