@extends('layout.master')

@section('title')
Life and Light Admin | Ethnic
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
      <form action="/saveEthnic" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }} 

      <div class="modal-body">
       
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" name="name" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name in Amharic</label>
            <input type="text" name="nameAmh" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Population</label>
            <input type="text" name="population" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Language</label>
            <input type="text" name="language" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Language in Amharic</label>
            <input type="text" name="languageAmh" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Evangelical(%)</label>
            <input type="text" name="christianity" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="file" name="image" accept="image/*" required>
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Evangelical Number</label>
            <input type="number" name="evangelicalNumber" class="form-control" id="recipient-name">
          </div>
          
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea name="description" class="form-control" id="message-text"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description in Amharic</label>
            <textarea name="descriptionAmh" class="form-control" id="message-text"></textarea>
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Insert</button>
      </div>
      </form>

    </div>
  </div>
</div>


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Ethnic Table</h4>
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
      <th scope="col">Name</th>
      <th scope="col">Name in Amharic</th>
      <th scope="col">Evangelical(%)</th>
      <th scope="col">Population</th>
      <th scope="col">Primary Language</th>
      <th scope="col">Primary Language in amharic</th>
      <th scope="col">Evangelical Number</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($ethnics as $ethnic)
    <a href="#">         
    <tr>
      <th scope="row">{{ $ethnic->id }}</th>
      <td>{{ $ethnic->name }}</td>
      <td>{{ $ethnic->nameAmh }}</td>
      <td>{{ $ethnic->christianity }} </td>
      <td>{{ $ethnic->population }}</td>
      <td>{{ $ethnic->language }}</td>
      <td>{{ $ethnic->languageAmh }}</td>
      <td>{{ $ethnic->evangelicalNumber }}</td>
      <td><img src="{{ asset('uploads/'.$ethnic->image)}}" width="200px" height="100px" alt=""></td>
      <td><a href="{{url('ethnicEdit/'.$ethnic->id)}}"   class="btn btn-success">Edit</a></td>

       <td>
      <form action="/role-delete/{{ $ethnic->id }}" method="POST">
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
    {{ $ethnics->links() }}
</div>

              </div>
            </div>
          </div>


         



















@endsection
@section('script')
@endsection
