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
<div class="container"><br>
<h1> <center>List of Pre-Registered Students</center></h1><br>
<table class="table table-bordered">
		<tr>
			<th>S.NO</th>
			<th>Username</th>
			<th>Password</th>
		</tr>

        <tr>
        	<td>{{$data->id}}</td>
           <td>{{$data->username}}</td>
		   <td>{{$data->password}}</td>    	
        </tr>

	</table>
</div>
</body>
</html>