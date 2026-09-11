@extends('dashboard.master')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->posted }} {{ $post->category->title ?? '' }}</p>
    <div>{{ $post->description }}</div>
    <div>{{ $post->content }}</div>

    @if($post->image)
        <div>
            <img src="{{ asset('uploads/post/' . $post->image) }}" alt="{{ $post->title }}" width="300">
        </div>
    @endif
@endsection
