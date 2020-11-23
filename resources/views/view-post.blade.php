
@extends('layouts.app')
@section('content')

<div class = "container">
<div class = "col-sm-12">
	<a href="{{ URL :: to ('home')}}" class = "btn btn-primary">Home</a>
	<a href="{{ URL :: to ('all-post')}}" class = "btn btn-primary">All Posts</a>
	<h1 class = "text-center">  View Single Post  Details </h1>

Title  :: {{$viwpost->title}}<br>
Author Name :: {{$viwpost->author}}<br>
Tag :: {{$viwpost->tag}}<br>
Description :: {{$viwpost->description}}<br>

</div>
</div>
@endsection()