@extends('layouts.app')
@section('content')

<div class= "container">
	           @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
	    <form  action="{{url('update-post/'.$edtpost->id)}}" method="POST"> 
        @csrf
          <div class="modal-body">
            <div class="form-group">
                <label for="InputTitle">Title</label>
                <input type="text" class="form-control" id="InputTitle" name="title" value ="{{$edtpost->title}}">
          </div>
           <div class="form-group">
                <label for="InputAuthor">Author Name</label>
                <input type="text" class="form-control" id="InputAuthor" name="author" value = "{{$edtpost->author}}">
          </div>
           <div class="form-group">
                <label for="InputTag">Tag/Catagory</label>
                <input type="text" class="form-control" id="InputTag"  name="tag" value = "{{$edtpost->tag}}">
          </div>
               <div class="form-group">
                <label for="Inputdescription">Your Information</label>
                <textarea type="test"  class="form-control" id="Inputdescription" rows="4" name="description" >{{$edtpost->description}}</textarea>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" name="summit" value="Update">
          </div>
    </form>
</div>


@endsection