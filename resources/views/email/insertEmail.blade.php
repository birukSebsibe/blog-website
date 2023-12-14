@extends('layout.master')                      

@section('title')
Life and Light Admin | Bulk Message
@endsection


@section('content')
<br><br><br><br>
    <h2>Enter message</h2>

    <form method="post" action="{{ route('updateEmail') }}">
        @csrf

     
  

        <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" type="text" id="message" rows="3" name="message"  placeholder="Enter Message Here" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-secondary btn-sm">Submit Message</button>

    </form>

@endsection
@section('script')
@endsection
