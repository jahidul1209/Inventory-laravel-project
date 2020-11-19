<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<br>

<div class = "container">
	<a href="{{URL :: to ('/')}}" class = "btn btn-primary"> Home </a>
	<h1 class = "text-center">  Contact with Us  </h1>
	<table class="table table-border">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone No</th>
			<th>Action</th>
		</tr>
		@foreach($transfercontact as $newcontact)
	    <tr>
			<td>{{ $newcontact -> id}}</td>
			<td>{{ $newcontact -> name}}</td>
			<td>{{ $newcontact -> email}}</td>
			<td>{{ $newcontact -> phone}}</td>
			<td>
				<a class = "btn btn-primary" href="">Edit</a>
				<a class="btn btn-danger" href="">Delete</a>
				<a class = "btn btn-primary" href="">View</a>
			</td>

	     </tr>
	     @endforeach
	</table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>