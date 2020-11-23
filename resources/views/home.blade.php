@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                    <a class= "btn btn-success btn-sm" style = "float: right;" href="" data-toggle="modal" data-target="#exampleModalCenter">Add Post</a>
                    <a class= "btn btn-info btn-sm" style = "float: right;" href="{{route('news-add')}}">Add News</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('all-posts')}}">All Post </a> | |
                     <a href="{{route('all-news')}}"> All News</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
    <form  action="{{url('insert-post')}}" method="POST"> 
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
                <label for="InputTag">Tag/Catagory</label>
                <input type="text" class="form-control" id="InputTag" placeholder="Tag Name"  name="tag">
          </div>
               <div class="form-group">
                <label for="Inputdescription">Your Information</label>
                <textarea type="test"  class="form-control" id="Inputdescription"  placeholder="Description"rows="4" name="description"></textarea>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" name="summit" value="Submit">
          </div>
    </form>
    </div>
  </div>
</div>
@endsection







