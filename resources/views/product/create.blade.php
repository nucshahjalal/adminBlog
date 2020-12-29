<html>
<head>
	<title>Add Product</title>
</head>
<body>

	<form action="/product" method="post">	
	    {{csrf_field()}}	
		<input type="text" name="name" placeholder="product  name">
		<input type="text" name="type" placeholder="product type">
		<input type="text" name="status" placeholder="product status">
		<input type="submit" value="submit">
	</form>
<table border="1">
	<tr>
		<th>SL No</th>
		<th>Product Name</th>
		<th>Product Type</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	@foreach($pro as $key=>$data)
	<tr>
		<td>{{++$key}}</td>
		<td>{{$data->name}}</td>
		<td>{{$data->type}}</td>
		<td>{{$data->status}}</td>
		<td>Edit |<a onclick="return confirm ('Are you sure delete')"  href="/product/delete/{{$data->id}}">Delete</a></td>
	</tr>
@endforeach
</table>

</body>
</html>
