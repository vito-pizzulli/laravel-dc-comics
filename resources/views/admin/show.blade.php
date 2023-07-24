@extends('layouts.app')

@section('title', 'Laravel DC Comics Single Comic')

@section('main-section')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Title: {{ $comic->title }}</h2>
            <img src="{{ $comic->thumb }}" alt="Comic Cover" class="w-25">
            <p>ID: {{ $comic->id }}</p>
            <p>Description: {{ $comic->description }}</p>
            <p>Price: {{ $comic->price }}</p>
            <p>Series: {{ $comic->series }}</p>
            <p>Sale Date: {{ $comic->sale_date }}</p>
            <p>Type: {{ $comic->type }}</p>
            <p>Artists: {{ implode(', ', $comic->artists) }}.</p>
            <p>Writers: {{ implode(', ', $comic->writers) }}.</p>
        </div>
    </div>
</div>
@endsection