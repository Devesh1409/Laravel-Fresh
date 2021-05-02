<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
	    table,tr,th,td{
			border:2px solid;
			border-collapse: collapse;
			
		}
		tr{
			background: white;

		}
		th{
			background:#0984e3;
		}
		td:hover{
			background: #dfe6e9 ;
		}
		.btn
	    {
	        text-align: center;
            border-color: #d49f4f;
            padding: 0px;
           
        }
	</style>




	</head>

<body>
<div class="container">
@if(session('message'))

   <p class="alert alert-success">
   	 {{session('message')}}
   </p>
   @endif
	<br>
<h1> <center>List of Students</center></h1><br>
<table class="table table-bordered">
		<tr>
			<th>S.NO</th>
			<th>Name</th>
			<th>Image</th>
	        <th>Action</th>
		</tr>
@foreach($data as $a)
        <tr>
        	<td>{{$a->id}}</td>
           <td>{{$a->name}}</td>
		   <td>
		   	<img src="/upload/{{$a->image}}" style="width: 100px;height: 100px;">
		   </td>

		    <td>
        	<a class="btn" style="background: #00cec9;color: wheat;" href="{{url('image/edit/'.$a->id)}}">EDIT</a>
       		<a class="btn" style="background: #d63031;color: wheat;" href="{{url('image/delete/'.$a->id)}}">DELETE</a>
        	</td>     	
        </tr>
@endforeach
	</table>
</div>
</body>
</html>