@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4"> Inventory System</h1>
        <h2 class="text-center mb-4">Inventory Items</h2>

        <!-- Button to Add New Item -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('items.create') }}" class="btn btn-success">Add Item</a>
        </div>

        <!-- Check if the cart has items -->
        @if ($items->isNotEmpty())
            <!-- Responsive Table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>Rs.{{ number_format($item->price, 2) }}</td>
                                <td>
                                    <!-- View Item Button -->
                                    <a href="{{ route('items.show', $item->id) }}" class="btn btn-primary btn-sm mb-1">View
                                        Item</a>

                                    <!-- Edit Item Button -->
                                    <a href="{{ route('items.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm mb-1">Edit</a>

                                    <!-- Delete Item Form -->
                                    <form action="{{ route('items.destroy', $item->id) }}" method="POST"
                                        style="display:inline-block;"
                                        onsubmit="return confirm('Are you sure you want to delete this item?');">
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
        @else
            <!-- Message when the cart is empty -->
            <p class="text-center">No items in the inventory. Add items to see them here.</p>
        @endif

        <!-- Button to Home -->
        <div class="d-flex justify-content-end mb-3">
            <a href="/" class="btn btn-outline-dark">Home</a>
        </div>
    </div>
@endsection
