<h1>Lista de Posts</h1>
@foreach($posts as $post)
    <p>{{ $post->title }} - Categoría: {{ $post->category->title }}</p>
@endforeach
