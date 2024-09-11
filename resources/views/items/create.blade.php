@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <!-- Heading for Add New Item -->
        <h2 class="text-center mb-4">Add New Item</h2>

        <!-- Form Container -->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12"> <!-- Responsive column sizing -->
                <form action="{{ route('items.store') }}" method="POST">
                    @csrf

                    <!-- Form Group for Name -->
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <!-- Form Group for Description -->
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>

                    <!-- Form Group for Quantity -->
                    <div class="form-group mb-3">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>

                    <!-- Form Group for Price -->
                    <div class="form-group mb-3">
                        <label for="price">Price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success">Add Item</button>
                </form>
            </div>
        </div>
    </div>
@endsection
