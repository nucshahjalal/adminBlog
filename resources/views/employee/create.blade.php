<html>
<head>
	<title>Add Employee</title>
</head>
<body>

@if(session()->has('message'))
<h3 class="alert alert-success">{{session()->get('message')}}</h3>
@endif
	<form action="/emp" method="POST">
		{{csrf_field()}}
		<input type="text" name="fname" placeholder="First  Name">
		<input type="text" name="lname" placeholder="Last Name">
		<input type="text" name="address" placeholder="Your Address">
		<input type="text" name="phone_no" placeholder="Phone No">
		<input type="submit" value="submit">
	</form>
	<table border="1">
		<tr>
			<th>SL</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>Phone No</th>
			<th>Action</th>
		</tr>
@foreach($emp as $key=>$data)
		<tr>
			<td>{{++$key}}</td>
			<td>{{$data->fname}}</td>
			<td>{{$data->lname}}</td>
			<td>{{$data->address}}</td>
			<td>{{$data->phone_no}}</td>
			<td><a href="/emp/edit/{{$data->id}}">Edit</a> | <a onclick="return confirm('Are you sure delete')" href="/emp/delete/{{$data->id}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>