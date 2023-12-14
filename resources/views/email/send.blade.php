@extends('layout.master')

@section('title')
Life and Light Admin | Bulk Message
@endsection


@section('content')
<br><br><br><br>

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Subscribers who recive the email</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif


                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                <a href="/send-mail" class="btn btn-success" role="button" aria-pressed="true">Send Email</a>

                
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
    
  
    </tr>
  </thead>
  <tbody>
  @foreach ($subscribers as $subscriber)
    <a href="#">         
    <tr>
      <th scope="row">{{ $subscriber->id }}</th>
      <td>{{ $subscriber->name }}</td>
      <td>{{ $subscriber->email }} </td>
    
       <td>
      <form action="/subscribers-delete/{{ $subscriber->id }}" method="POST">
               
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
