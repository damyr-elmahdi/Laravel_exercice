@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Product Details</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>ID:</strong> {{ $product->id }}
                    </div>
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $product->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Price:</strong> {{ $product->price }}
                    </div>
                    <div class="mb-3">
                        <strong>Category:</strong> {{ $product->category->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Created At:</strong> {{ $product->created_at }}
                    </div>
                    <div class="mb-3">
                        <strong>Updated At:</strong> {{ $product->updated_at }}
                    </div>
                    
                    <div class="mb-3">
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection