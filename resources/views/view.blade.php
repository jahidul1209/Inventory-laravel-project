
@extends('layouts.app')
@section('content')

<div class = "container">
<div class = "col-sm-12">
	<h1 class = "text-center">  View Details </h1>

Name :: {{$view->name}}<br>
Email :: {{$view->email}}<br>
Phone No :: {{$view->phone}}<br>
Description :: {{$view->description}}<br>

</div>
</div>
@endsection()
