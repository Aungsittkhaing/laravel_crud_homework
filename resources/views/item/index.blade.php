@extends('pages.main')
@section('title')
    Item lists
@endsection
@section('content')
    <table class="table table-primary">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Price</td>
                <td>Stock</td>
                <td>Description</td>
                <td>Control</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <span class="small">
                            {{ \Illuminate\Support\Str::limit($item->description, 20, '...') }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('item.show', $item->id) }}" class="btn btn-sm btn-primary">
                            <i class="bi bi-list-check"></i>
                        </a>
                        <a href="{{ route('item.edit', $item->id) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route('item.destroy', $item->id) }}" class="d-inline-block" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">
                        There is no record <br>
                        <a href="{{ route('item.create') }}" class="btn btn-outline-primary btn-sm">Create</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
