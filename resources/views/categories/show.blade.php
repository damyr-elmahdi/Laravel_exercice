@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Category Details</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>ID:</strong> {{ $category->id }}
                    </div>
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $category->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Description:</strong> {{ $category->description }}
                    </div>
                    <div class="mb-3">
                        <strong>Created At:</strong> {{ $category->created_at }}
                    </div>
                    <div class="mb-3">
                        <strong>Updated At:</strong> {{ $category->updated_at }}
                    </div>
                    
                    <div class="mb-3">
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                    
                    <h3 class="mt-4">Products in this Category</h3>
                    @if($category->products->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category->products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}">Show</a>
                                        <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No products in this category.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection