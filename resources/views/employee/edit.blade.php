<html>
<head>
	<title>Update Employee</title>
</head>
<body>


	<form action="/emp/{{$data->id}}" method="POST">
		{{csrf_field()}}
		<input type="text" name="fname" placeholder="First  Name" value="{{$data->fname}}"> 
		<input type="text" name="lname" placeholder="Last Name" value="{{ $data->lname }}">
		<input type="text" name="address" placeholder="Your Address" value="{{ $data->address }}">
		<input type="text" name="phone_no" placeholder="Phone No" value="{{ $data->phone_no }}">
		<input type="submit" value="Update">
	</form>