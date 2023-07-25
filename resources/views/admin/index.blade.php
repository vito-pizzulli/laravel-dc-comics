@extends('layouts.app')

@section('title', 'DC Comics Admin Panel - Comics List')

@section('main-section')
<div class="container p-5">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comicsList as $comic)
                        <tr>
                            <th scope="row" class="text-center">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            <td class="text-center">{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td class="text-center">{{ $comic->sale_date }}</td>
                            <td class="text-center">{{ $comic->type }}</td>
                            <td class="text-center"><a class="btn btn-sm btn-primary me-2" href="{{ route('admin.show', $comic->id) }}">View</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $comicsList->links() }}
@endsection