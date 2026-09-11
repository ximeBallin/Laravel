@extends('dashboard.master')

@section('content')
    @include('dashboard.fragment._errors-form')

    @if($errors->any())
        @foreach($errors->all() as $e)
            <div>
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{ route('post.update', $post->id) }}" method="post">

        @method('PATCH')




        @csrf
        <label for="">Title</label>
        <input type="text" name="title" value="{{$post->title}}">

        <label for="">Slug</label>
        <input type="text" name="slug" value="{{$post->slug}}">

        <label for="">Content</label>
        <textarea name="content" >{{$post->content}}</textarea>

        <label for="">Category</label>
        <select name="category_id">
            @foreach($categories as $title => $id)
                <option value={{$post->category->id== $id ? 'selected' : ''}} value="{{$id}}" >{{$title}}</option>
            @endforeach
        </select>

        <label for="description">Description</label>
        <textarea name="description" >{{$post->content}}</textarea>

        <label for="posted">Posted</label>
        <select name="posted" id="posted">
            <option {{$post->posted=='not' ? 'selected':''}} value="not">Not</option>
            <option {{$post->posted=='yes' ? 'selected':''}} value="yes">Yes</option>
        </select>

        <button type="submit">Send</button>
    </form>
@endsection
