@extends("layout.main")

@section ('container')
    <h2>Post Category: {{ $category }}</h2>
    <br>
    @foreach ($posts as $post)
        <h5><a href="/posts/{{$post->slug}}">{{ $post->title }}</a></h5>
        <p>{{ $post->excerpt }}</p>
    @endforeach 
@endsection