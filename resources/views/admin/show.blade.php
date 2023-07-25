@extends('layouts.app')

@section('title', 'Laravel DC Comics - View Comic')

@section('main-section')
<div class="container p-5">
    <div class="row">
        <div class="col-8">
            <h2><span class="text-primary">Title:</span> {{ $comic->title }}</h2>
            <p><span class="text-primary">ID:</span> {{ $comic->id }}</p>
            <p><span class="text-primary">Description:</span> {{ $comic->description }}</p>
            <p><span class="text-primary">Price:</span> {{ $comic->price }}</p>
            <p><span class="text-primary">Series:</span> {{ $comic->series }}</p>
            <p><span class="text-primary">Sale Date:</span> {{ $comic->sale_date }}</p>
            <p><span class="text-primary">Type:</span> {{ $comic->type }}</p>
            <p><span class="text-primary">Artists:</span> {{ implode(', ', $comic->artists) }}.</p>
            <p><span class="text-primary">Writers:</span> {{ implode(', ', $comic->writers) }}.</p>
        </div>
        <div class="col-4">
            <img src="{{ $comic->thumb }}" alt="Comic Cover" class="mw-100">
        </div>
    </div>
</div>
@endsection