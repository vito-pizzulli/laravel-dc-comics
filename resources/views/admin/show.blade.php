@extends('layouts.app')

@section('title', 'DC Comics Admin Panel - View Comic')

@section('main-section')
<div class="container p-5">
    <h1 class="pb-3 text-primary">View Comic</h1>
    <div class="row">
        <div class="col-8">
            <h2 class="mb-4"><span class="text-primary">Title:</span> {{ $comic->title }}</h2>
            <p><span class="text-primary">ID:</span> {{ $comic->id }}</p>
            <p><span class="text-primary">Description:</span> {{ $comic->description }}</p>
            <p><span class="text-primary">Price:</span> {{ $comic->price }}</p>
            <p><span class="text-primary">Series:</span> {{ $comic->series }}</p>
            <p><span class="text-primary">Sale Date:</span> {{ $comic->sale_date }}</p>
            <p><span class="text-primary">Type:</span> {{ $comic->type }}</p>
            <p><span class="text-primary">Artists:</span> {{ implode(', ', $comic->artists) }}.</p>
            <p class="mb-4"><span class="text-primary">Writers:</span> {{ implode(', ', $comic->writers) }}.</p>
            <a class="btn btn-sm btn-warning me-2 fs-5" href="{{ route('admin.edit', $comic->id) }}">Edit</a>
            <form action="{{ route('admin.destroy', $comic->id) }}" class="d-inline-block" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-secondary me-2 fs-5">Delete</button>
            </form>
        </div>
        <div class="col-4">
            <img src="{{ $comic->thumb }}" alt="Comic Cover" class="mw-100">
        </div>
    </div>
</div>
@endsection