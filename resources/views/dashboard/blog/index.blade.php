@extends('dashboard.master')

@section('content')
    <h1>Listado del Blog</h1>
    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach

    {{ $posts->links() }}
@endsection
