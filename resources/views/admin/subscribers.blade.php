@extends('layout.master')

@section('title')
Life and Light Admin | Subscribers
@endsection


@section('content')


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Subscribers Table</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif


                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                <a href="{{route('insertEmail')}}" class="btn btn-success" role="button" aria-pressed="true">Create Bulk Message</a>

                
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">location</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($subscribers as $subscriber)
    <a href="#">         
    <tr>
      <th scope="row">{{ $subscriber->id }}</th>
      <td>{{ $subscriber->name }}</td>
      <td>{{ $subscriber->email }} </td>
      <td>{{ $subscriber->location }}</td>
       <td>
      <form action="/subscribers-delete/{{ $subscriber->id }}" method="POST">
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
      {{ $subscribers->links() }}
      </div>

              </div>
            </div>
          </div>


         



















@endsection
@section('script')
@endsection
