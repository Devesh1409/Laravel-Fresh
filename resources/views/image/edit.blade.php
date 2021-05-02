<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<br>
<center><h1> FORM </h1></center>

		    <form method="post" action="{{url('image/update')}}" enctype="multipart/form-data">
		    	@csrf
	<input type="hidden" name="id" value="{{$data->id}}">
		<input type="hidden" name="id" value="{{$data->id}}">

	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="{{$data->name}}">
	</div>
	<div>
		<label>Image</label>
		<input type="file" name="image" class="form-control" >
		<img src="/upload/{{$data->image}}" style="width: 100px;height: 100px;">
	</div><br>
	<input type="submit" name="submit" value="submit" class="btn btn-info">
</form>
</div>
</body>
</html>