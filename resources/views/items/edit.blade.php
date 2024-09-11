@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="text-center mb-4">Edit Item</h2>

        <!-- Form for Editing Item -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('items.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Indicates that this is a PUT request for updating -->
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4">{{ $item->description }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity"
                            value="{{ $item->quantity }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price">Price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price"
                            value="{{ $item->price }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Item</button>
                </form>
            </div>
        </div>

    </div>
@endsection
