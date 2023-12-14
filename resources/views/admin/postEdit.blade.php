@extends('layout.master')

@section('title')
    Edit Post 
@endsection


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Post information
                </div>
                <div class="card-body">

                <form action="/post-update/{{ $posts->id }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}


                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" value="{{ $posts->title }}">
                  <label>Title in Amharic</label>
                  <input type="text" name="titleAmh" class="form-control" value="{{ $posts->titleAmh }}">
                  <label>Expert</label>
                  <input type="text" name="excerpt" class="form-control" value="{{ $posts->excerpt }}">
                  <label>Body</label>
                  <input type="text" name="body" class="form-control" value="{{ $posts->body }}">
                  <label>Body in Amharic</label>
                  <input type="text" name="bodyAmh" class="form-control" value="{{ $posts->bodyAmh }}">
                  <label>Image</label>
                  <div class="custom-file">
                 <input type="file"  name="image" class="custom-file-input" value="{{ $posts->image }}">
                 <label class="custom-file-label" for="customFile">Choose Image to Change </label>
                 </div>
                  
                  
                  
                  
                </div>
                  <label>created_at</label>
                  <input type="text" name="created_at" class="form-control" value="{{ $posts->created_at }}">
                  <label>updated_at</label>
                  <input type="text" name="updated_at" class="form-control" value="{{ $posts->updated_at }}">
                  

                <button type="submit" class="btn btn-success" >Update</button>

              
                <a href="{{route('post')}}" class="btn btn-danger">Cancle</a>



                </form>


                </div>
            </div>
        </div>

    </div>


</div>





















@endsection


@section('script')
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

@endsection
