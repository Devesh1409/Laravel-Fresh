 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	
</head>
<body>
<div class="container"><br>
<center><h1> FORM </h1></center>
<form method="post" action="{{url('banner/update')}}">@csrf
	<input type="hidden" name="id" value="{{$data->id}}">
	<div class="form-group">
		<label> Name</label>
		<input type="text" name="name" required="" class="form-control" placeholder="Enter Username" value="{{$data->name}}">
    </div>
    <div class="form-group">
		<label>city:</label><br>
		<input type="text" name="city" placeholder="city" class="form-control" value="{{$data->city}}">
    </div>

    <div class="form-group">
		<label> address</label>
		<textarea type="text" name="address" required="" class="form-control" placeholder="Enter Address"> {{$data->address}}</textarea>
	</div>
	
        <div class="form-group">
					<label>college:</label>
				   <select class="form-control" name="college" class="form-control">
				   	<option value="">Select</option>
				   	<option value="ITM" @if($data->college=='ITM')selected @endif>ITM</option>
				   	<option value="RJIT" @if($data->college=='RJIT')selected @endif>RJIT</option>
				   	<option value="IIT" @if($data->college=='IIT')selected @endif>ITM GOI</option>
				   	<option value="MITS" @if($data->college=='MITS')selected @endif>MITS</option>
				</select>
		</div>
		<div class="form-group">
				<label>Gender:</label>
                <input type="radio" name="gender"  required="required" value="male"  @if($data->gender=='male')checked @endif>male
                <input type="radio" name="gender"  required="required" value="female"  @if($data->gender=='female')checked @endif>female
                <input type="radio" name="gender"  required="required" value="other"  @if($data->gender=='other')checked @endif>other
        </div>
        <div class="form-group">
		<label> Qualification:</label>
		<input type="checkbox" name="qualification[]" value="10th" @if(strpos($data->qualification,'10th')!==false)checked @endif>10th
		<input type="checkbox" name="qualification[]" value="12th" @if(strpos($data->qualification,'12th')!==false)checked @endif>12th
		<input type="checkbox" name="qualification[]" value="UG" @if(strpos($data->qualification,'UG')!==false)checked @endif>UG
		<input type="checkbox" name="qualification[]" value="PG" @if(strpos($data->qualification,'PG')!==false)checked @endif>PG

	</div>
		<div class="form-group">
		<label>Phone Number</label>
		<input type="Number" name="phone_number" required="" class="form-control" placeholder="Enter Mobile No.(10 Digits)" value="{{$data->phone_number}}">
        </div>
	<button value="update" name="submit" class="btn btn-success">Update</button>
</form>
</div>
</body>
</html>