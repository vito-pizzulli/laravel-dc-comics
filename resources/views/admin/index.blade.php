@extends('layouts.app')

@section('title', 'DC Comics Admin Panel - Comics List')

@section('main-section')
<div class="container p-5">
    <h1 class="pb-3 text-primary">Comics List</h1>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped table-hover text-center">
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
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary m-1" href="{{ route('admin.show', $comic->id) }}">View</a>
                                <a class="btn btn-sm btn-warning m-1" href="{{ route('admin.edit', $comic->id) }}">Edit</a>
                                <form action="{{ route('admin.destroy', $comic->id) }}" class="form-delete d-inline-block m-1" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-secondary me-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $comicsList->links() }}
@endsection

@section('custom-scripts-tail')
    <script>
        const deleteForms = document.querySelectorAll('form.form-delete');
        deleteForms.forEach(deleteForm => {
            deleteForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const deleteConfirm = window.confirm('Are you sure you want to delete this comic? This action is irreversible.');
                if (deleteConfirm) {
                    this.submit();
                }
            });
        });
    </script>
@endsection