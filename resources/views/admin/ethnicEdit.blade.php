@extends('layout.master')

@section('title')
    Edit Ethnic 
@endsection


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Ethnic information
                </div>
                <div class="card-body">

                <form action="/role-update/{{ $ethnics->id }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}


                <div class="form-group">
                  <label>Ethnic Name</label>
                  <input type="text" name="name" class="form-control" value="{{ $ethnics->name }}">
                  <label>Ethnic Name in Amharic</label>
                  <input type="text" name="nameAmh" class="form-control" value="{{ $ethnics->nameAmh }}">
                  <label>Evangelical(%)</label>
                  <input type="text" name="christianity" class="form-control" value="{{ $ethnics->christianity }}">
                  <label>Population</label>
                  <input type="text" name="population" class="form-control" value="{{ $ethnics->population }}">
                  <label>Primary Language</label>
                  <input type="text" name="language" class="form-control" value="{{ $ethnics->language }}">
                  <label>Primary Language In Amharic</label>
                  <input type="text" name="languageAmh" class="form-control" value="{{ $ethnics->languageAmh }}">
                  <label>Evangelical Number</label>
                  <input type="number" name="evangelicalNumber" class="form-control" value="{{ $ethnics->evangelicalNumber }}">
                  <label>Image</label>
                  <div class="custom-file">
                 <label class="custom-file-label" for="customFile">Choose Image to Change </label>
                 </div>
                  <label>Description</label>
                
                  <textarea class="form-control" name="description" value="{{ $ethnics->description }}"  rows="6">{{ nl2br($ethnics->description) }}</textarea>
                </div>
                <label>Description in Amharic</label>
                
                  <textarea class="form-control" name="descriptionAmh" value="{{ $ethnics->descriptionAmh }}"  rows="6">{{ nl2br($ethnics->descriptionAmh) }}</textarea>
                </div>
                
                  <!-- <label>created_at</label>
                  <input type="text" name="created_at" class="form-control" value="{{ $ethnics->created_at }}">
                  <label>updated_at</label>
                  <input type="text" name="updated_at" class="form-control" value="{{ $ethnics->updated_at }}">
                  <label>deleted_at</label>
                  <input type="text" name="deleted_at" class="form-control" value="{{ $ethnics->deleted_at }}"> -->

                <button type="submit" class="btn btn-success" >Update</button>

              
                <a href="{{route('ethnic')}}" class="btn btn-danger">Cancle</a>



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
