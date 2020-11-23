
@extends('layouts.app')
@section('content')

<div class = "container">
<div class = "col-sm-8 col-sm-offset-2">
	<h1 class = "text-center">  Edit Your Name  </h1>

<form method="post" action="{{url('update-data/' .$edt->id)}}">
	@csrf
		  <div class="form-group">
			    <label for="InputName">Your Name</label>
			    <input type="text" class="form-control" id="InputName" placeholder="Enter Your Name" name="name" value="{{$edt ->name}}">
		  </div>
		   <div class="form-group">
			    <label for="InputEmail">Your Name</label>
			    <input type="email" class="form-control" id="InputEmail" placeholder="Enter Your Email" name="email" value="{{$edt ->email}}">
		  </div>
		   <div class="form-group">
			    <label for="InputPhone">Your Name</label>
			    <input type="text" class="form-control" id="InputPhone" placeholder="Enter Your Phone No"  name="phone" value="{{$edt ->phone}}">
		  </div>
			   <div class="form-group">
			    <label for="Inputdescription">Your Name</label>
			    <textarea type="text"  class="form-control" id="Inputdescription"  placeholder="Description"rows="4" name="description" value="{{$edt ->description}}"></textarea>
		  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection()