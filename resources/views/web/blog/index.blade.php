@extends('dashboard.master')

@section('content')
    <h1>Listado del Blog</h1>
    <hr style="margin-bottom: 20px; border: 0; border-top: 1px solid #ccc;">

    @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach

    <!-- Paginación -->
    <div style="margin-top: 20px;">
        {{ $posts->links() }}
    </div>
@endsection
