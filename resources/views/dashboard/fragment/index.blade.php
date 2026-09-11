@foreach($posts as $p)
    <tr>
        <td>{{ $p->title }}</td>
        <td>{{ $p->posted }}</td>
        <td>
            <a href="{{ route('post.show', $p->id) }}">Show</a>
            <a href="{{ route('post.edit', $p->id) }}">Edit</a>
            <form action="{{ route('post.destroy', $p) }}" method="post" style="display:inline;">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
