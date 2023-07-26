@extends('layouts.app')

@section('title', 'DC Comics Admin Panel - Edit Comic')

@section('main-section')
<div class="container p-5">
    <h1 class="pb-3 text-primary">Edit Comic</h1>
    <form action="{{ route('admin.update', $comic->id) }}" method="POST" class="mb-2">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Cover Image URL</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}" required>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" required>
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="10" style="resize: none" required>{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <textarea class="form-control" id="artists" name="artists" style="resize: none" required>{{ implode(', ', $comic->artists) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <textarea class="form-control" id="writers" name="writers" style="resize: none" required>{{ implode(', ', $comic->writers) }}</textarea>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-sm btn-primary me-2 fs-5">Confirm</button>
        <button type="reset" class="btn btn-sm btn-warning me-2 fs-5">Undo Changes</button>
    </form>
    <form action="{{ route('admin.destroy', $comic->id) }}" class="form-delete" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-secondary fs-5">Delete Comic</button>
    </form>
</div>
@endsection