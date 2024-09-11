@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <!-- Heading for Item Details -->
        <h2 class="text-center mb-4">Item Details</h2>

        <!-- Card to Display Item Details -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12"> <!-- Adjust column size based on screen size -->
                <div class="card">
                    <div class="card-body">
                        <!-- Card Title -->
                        <h5 class="card-title text-center">{{ $item->name }}</h5>

                        <!-- Item Description -->
                        <p class="card-text"><strong>Description:</strong> {{ $item->description }}</p>

                        <!-- Item Quantity -->
                        <p class="card-text"><strong>Quantity:</strong> {{ $item->quantity }}</p>

                        <!-- Item Price -->
                        <p class="card-text"><strong>Price:</strong> Rs. {{ number_format($item->price, 2) }}</p>

                        <!-- Back to List Button -->
                        <a href="{{ route('items.index') }}" class="btn btn-secondary mt-4 d-block mx-auto">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
