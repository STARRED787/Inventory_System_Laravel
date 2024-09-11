@extends(' layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Inventory Items</h2>
        <a href="{{ route('items.create') }}" class="btn btn-success mb-3">Add Item</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>food</td>
                    <td>5</td>
                    <td>5</td>
                    <td>
                        <a href="#" class="btn btn-primary">View Item</a>

                        <a href="#" class="btn btn-primary">Edit</a>
                        <form action="" method="POST" style="display:inline-block;">
                            @csrf

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
