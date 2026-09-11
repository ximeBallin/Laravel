@extends('dashboard.master')

@section('content')

    <a href="{{ route('category.create') }}">Create</a>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $c)
            <tr>
                <td>
                    {{ $c->id }}
                </td>
                <td>
                    {{ $c->title }}
                </td>
                <td>
                    <a href="{{ route('category.show', $c) }}">Show</a>
                    <a href="{{ route('category.edit', $c) }}">Edit</a>
                    <form action="{{ route('category.destroy', $c) }}" method="post" style="display:inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

@endsection
