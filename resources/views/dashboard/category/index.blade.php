@extends('dashboard.master')

@section('content')

    <div class="container">
        <a href="{{ route('category.create') }}" class="btn btn-success mb-3">Crear</a>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>
                        <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary btn-sm">Ver</a>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-secondary btn-sm">Editar</a>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $categories->links() }}
    </div>

@endsection
