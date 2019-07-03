<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <div class="container">
	 	<table>
	 		<thead>
	 			<tr>
					<th>Category ID</th>
					<th>Category Name</th>
					<th>Publication Status</th>
					<th>Created at</th>
					<th>Updated at</th>
					<th>Action</th>
				</tr>
	 		</thead>
	 		<tbody>
	 			@foreach()
	 			<td></td>
	 			<td></td>
	 			<td></td>
	 			<td></td>
	 			<td></td>
	 			<td>
	 				<form action="" method="">
	 					<a href="">Edit</a>
	 					<input type="text" name="" value="DELETE">
	 					<button class="btn btn-danger" type="submit">Delete</button>
	 				</form>
	 			</td>
	 			@endforeach
	 		</tbody>
	 	</table>
	 </div>
</body>
</html>
