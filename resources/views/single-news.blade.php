 @extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <div class="post-preview">
          <a href="#">
            <h2 class="post-title">
             {{$singlenews -> title}}
            </h2>
            <img src="{{URL :: to ($singlenews -> image)}}" style="height:300px ; width: 100%;"></a>
			<p >{{$singlenews -> details}}</p>
          <p class="post-meta">Posted by
            <a href="#"> {{$singlenews -> author}}</a>
            on September 24, 2019</p>
        </div>
         <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>
  @endsection