
@extends('layouts.app')
@section('content')

	<br>

<div class = "container">
	<a href="{{URL :: to ('/')}}" class = "btn btn-primary"> Home </a>
	<a href="{{URL :: to ('/insert-data')}}" class = "btn btn-success"> Add New </a>
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
				<a class = "btn btn-primary" href="{{ URL :: to ('edit-data/' .$newcontact -> id)}}">Edit</a>
				<a class="btn btn-danger" href="{{ URL :: to ('delete-data/' .$newcontact -> id)}}">Delete</a>
				<a class = "btn btn-primary" href="{{ URL :: to ('view-data/' .$newcontact -> id)}}">View</a>
			</td>

	     </tr>
	     @endforeach
	</table>
</div>
@endsection()