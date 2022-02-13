@extends("layout.main")

@section ('container')
    <h2>{{ $post->title }}</h2>
    <p>By: Indie in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p>{!! $post->body !!}</p>
    <a href="/blog">Back to Posts</a>
@endsection