

@extends('layouts.app')
@section('content')
<div class = "container">
<div class = "col-sm-8">
	<h1 class = "text-center">  View Details </h1>

<form  method="post" action="{{url('data-added')}}">
	@csrf
  <div class="form-group">
	<input type="text" class="form-control" name="name" placeholder="Name">
  </div>
  <div class="form-group">
	<input type="email" class="form-control" name="email" placeholder="Email">
</div>
  <div class="form-group">
	<input type="text" class="form-control" name="phone" placeholder="Phone">
</div>
  <div class="form-group">
	<input type="text" class="form-control" name="description" placeholder="description">
</div>
	<input type="submit" class="btn btn-primary" name="summit" value="Submit">
</form>
</div>
</div>
@endsection()