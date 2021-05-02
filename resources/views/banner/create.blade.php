 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	
</head>
<body>
<div class="container"><br>
<center><h1> FORM </h1></center>
<form method="post" action="{{url('banner/insert')}}">@csrf
	<div class="form-group">
		<label> Name</label>
		<input type="text" name="name" required="" class="form-control" placeholder="Enter Username">
    </div>
    <div class="form-group">
		<label>city:</label><br>
		<input type="text" name="city" placeholder="city" class="form-control">
    </div>

    <div class="form-group">
		<label> address</label>
		<textarea type="text" name="address" required="" class="form-control" placeholder="Enter Address"></textarea>
	</div>
	
        <div class="form-group">
					<label>college:</label>
				   <select class="form-control" name="college" class="form-control">
				   	<option>Select</option>
				   	<option>ITM</option>
				   	<option>RJIT</option>
				   	<option>IIT</option>
				   	<option>MITS</option>
				</select>
		</div>
		<div class="form-group">
				<label>Gender:</label>
				<br>
                <input type="radio" name="gender"  required="required" value="male">male
                <br>
                <input type="radio" name="gender"  required="required" value="female">female
                <br>
                <input type="radio" name="gender"  required="required" value="other">other
        </div>
        <div class="form-group">
		<label> Qualification:</label>
		<input type="checkbox" name="qualification[]" value="10th">10th
		<input type="checkbox" name="qualification[]" value="12th">12th
		<input type="checkbox" name="qualification[]" value="UG">UG
		<input type="checkbox" name="qualification[]" value="PG">PG

	</div>
		<div class="form-group">
		<label>Phone Number</label>
		<input type="Number" name="phone_number" required="" class="form-control" placeholder="Enter Mobile No.(10 Digits)">
        </div>
	<button value="submit" name="submit" class="btn btn-success">Submit</button>
</form>
</div>
</body>
</html>