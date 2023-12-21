@extends('layout.master')

@section('title')
    Life and Light Admin | File Uploads
@endsection


@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Enter Ethnic Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/saveResources" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }} 

      <div class="modal-body">
       
     
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">File</label>
            <input type="file" name="file" id="file"  required>
          </div>
          
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea name="description" class="form-control" id="message-text"></textarea>
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Upload</button>
      </div>
      </form>

    </div>
  </div>
</div>




<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Resource Upload</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif


                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table">

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" >Upload Resource</button>
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">File</th>
      <th scope="col">Description</th>
      <th scope="col">Description in Amharic</th>
      <th scope="col">Download</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($resources as $r)
    <a href="#">         
    <tr>
      <th scope="row">{{ $r->id }}</th>
      <td>{{ $r->name }}</td>
      <td>{{ $r->description }} </td>
      <td>{{ $r->descriptionAmh }} </td>
      <td><a href="{{url('download/'.$r->id)}}">
      <i class="fa fa-download" style="font-size:30px"></i>
      <td><form action="/r-delete/{{ $r->id }}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}  
        <button type="submit" class="btn btn-danger">Delete</button>

      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center">
  
</div>

              </div>
            </div>
          </div>





         




















        
@endsection


@section('script')

@endsection
