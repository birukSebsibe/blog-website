@extends('layout.master')

@section('title')
    Life and Light Admin | File Uploads
@endsection


@section('content')



<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Uploaded Files</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif


                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table">

             
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">File</th>
      <th scope="col">Date</th>
      <th scope="col">Download</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($files as $f)
    <a href="#">         
    <tr>
      <th scope="row">{{ $f->id }}</th>
      <td>{{ $f->name }}</td>
      <td>{{ $f->created_at }} </td>
      <td><a href="{{url('download/'.$f->id)}}">
      <i class="fa fa-download" style="font-size:30px"></i>
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
