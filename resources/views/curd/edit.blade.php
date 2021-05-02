<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	
</head>
<body>
<div class="container"><br>
<center><h1> FORM </h1></center>
<form method="post" action="{{url('curd/update')}}">@csrf
	<div class="form-group">
		<input type="text" name="id" value="{{$data->id}}">
		<label> Username</label>
		<input type="text" name="username" required="" class="form-control" placeholder="Enter Username" value="{{$data->username}}">
    </div>

    <div class="form-group">
		<label> Password</label>
		<input type="password" name="password" required="" class="form-control" placeholder="Enter Password" value="{{$data->password}}">
	</div>

	<button value="update" name="submit" class="btn btn-success">Update</button>
</form>
</div>
</body>
</html>