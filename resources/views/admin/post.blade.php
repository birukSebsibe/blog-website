@extends('layout.master')

@section('title')
    Life and Light Admin | Post
@endsection


@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Enter a Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/savePost" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }} 

      <div class="modal-body">
       
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">title</label>
            <input type="text" name="title" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">title in Amharic</label>
            <input type="text" name="titleAmh" class="form-control" id="recipient-name">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">	excerpt</label>
            <input type="text" name="excerpt" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">body</label>
            <input type="text" name="body" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">body in Amharic</label>
            <input type="text" name="bodyAmh" class="form-control" id="recipient-name">
          </div>
    
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="file" name="image" accept="image/*" required>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Post</button>
      </div>
      </form>

    </div>
  </div>
</div>


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Post Table</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif


                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table">

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" >Add</button>
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Title in Amharic</th>
      <th scope="col">Expert</th>
      <th scope="col">body</th>
      <th scope="col">body in Amharic</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($posts as $post)
    <a href="#">         
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->titleAmh }}</td>
      <td>{{ $post->excerpt }}</td>
      <td>{{ $post->body }}</td>
      <td>{{ $post->bodyAmh }}</td>
      <td><img src="{{ asset('uploads/'.$post->image)}}" width="200px" height="100px" alt=""></td>

      <td><a href="{{url('postEdit/'.$post->id)}}"   class="btn btn-success">Edit</a></td>

       <td>
      <form action="/post-delete/{{ $post->id }}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}  
        <button type="submit" class="btn btn-danger">Delete</button>

      </form>
      </td>
 
    </tr>
    @endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center">
      {{ $posts->links() }}
      </div>
                </div>
              </div>
            </div>
          </div>


         




















        
@endsection


@section('script')

@endsection
