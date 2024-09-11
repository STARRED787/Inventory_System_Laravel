@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h2>Item Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Description: </p>
                <p class="card-text">Quantity: </p>
                <p class="card-text">Price: $</p>
                <a href="{{ route('items.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
