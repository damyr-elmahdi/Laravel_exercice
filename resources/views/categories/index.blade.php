@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-md-8">
            <h2>Categories List</h2>
        </div>
        <div class="col-md-4 text-end">
            <a class="btn btn-success" href="{{ route('categories.create') }}">Add New Category</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Products Count</th>
                        <th width="280px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->products->count() }}</td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('categories.show', $category->id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection