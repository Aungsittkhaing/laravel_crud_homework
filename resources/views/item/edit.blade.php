@extends('pages.main')
@section('title')
    Edit Page
@endsection
@section('content')
    <form class="mt-3 p-2" method="POST" action="{{ route('item.update', $item->id) }}">
        @csrf
        @method('put')
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Item Name</label>
                    <input type="text" name="name" value="{{ $item->name }}" class="form-control"
                        placeholder="like apple,orange,etc">

                </div>
                <div class="mb-3">
                    <label class="form-label">Item Price</label>
                    <input type="number" name="price" value="{{ $item->price }}" class="form-control"
                        placeholder="like 1000, 2000, etc">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" value="{{ $item->stock }}" class="form-control"
                        placeholder="like 1,2,3,4,etc">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $item->description }}</textarea>
                </div>
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
