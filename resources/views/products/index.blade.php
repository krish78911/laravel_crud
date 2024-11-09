{{-- Include the header --}}
@include('products.header')

<div class="container-fluid">
    <h1>Product List</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm mt-3 mb-3">Create New Product</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table class="table table-striped table-bordered table-responsive">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td> <!-- Formatting price -->
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
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
{{-- Include the footer --}}
@include('products.footer')
