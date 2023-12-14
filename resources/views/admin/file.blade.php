@extends('layout.master')

@section('title')
Life and Light Admin | File 
@endsection


@section('content')



<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Files Table</h4>
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
      <th scope="col">Evangelical(%)</th>
      <th scope="col">Population</th>
      <th scope="col">Primary Language</th>
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
      <td>{{ $ethnic->christianity }} </td>
      <td>{{ $ethnic->population }}</td>
      <td>{{ $ethnic->language }}</td>
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

              </div>
            </div>
          </div>


         



















@endsection
@section('script')
@endsection
