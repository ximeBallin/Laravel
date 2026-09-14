@extends('dashboard.master')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <a href="{{ url('dashboard/blog') }}">Volver al listado</a>
@endsection
