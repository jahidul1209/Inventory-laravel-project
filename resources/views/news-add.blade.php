@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
    <form  action="{{url('insert-news')}}" method="POST" enctype="multipart/form-data"> 
        @csrf
          <div class="modal-body">
            <div class="form-group">
                <label for="InputTitle">Title</label>
                <input type="text" class="form-control" id="InputTitle" placeholder="Title" name="title">
          </div>
           <div class="form-group">
                <label for="InputAuthor">Author Name</label>
                <input type="text" class="form-control" id="InputAuthor" placeholder="Author Name" name="author">
          </div>
               <div class="form-group">
                <label for="Inputdescription">Your Information</label>
                <textarea type="test"  class="form-control" id="Inputdescription"  placeholder="Details"rows="4" name="details"></textarea>
          </div>
          <div class="form-group">
                <input type="file" id="InputImage" placeholder="Image"  name="image">
          </div>
          </div>
          <div class="modal-footer">
            <a href="{{ URL :: to ('home')}}" class = "btn btn-secondary">Close</a>
            <input type="submit" class="btn btn-primary" name="summit" value="Submit">
          </div>
    </form>
    </div>
  </div>
</div>
@endsection
