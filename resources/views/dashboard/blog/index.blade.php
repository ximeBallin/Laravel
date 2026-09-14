@extends('dashboard.master')

@section('content')
    <h1>Listado</h1>
    <h2>Listado de Posts</h2>

    @foreach($posts as $post)
        <x-card :title="$post->title">
            {{ $post->content }}

            <x-slot name="footer">
                <a href="{{ url('dashboard/blog/'.$post->id) }}">Ir</a>
            </x-slot>
        </x-card>
    @endforeach

    {{ $posts->links() }}
@endsection
