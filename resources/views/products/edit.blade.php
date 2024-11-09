    {{-- Include the header --}}
    @include('products.header')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Product</h1>
        
        <!-- Form -->
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" value="{{ $product->price }}" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" required>{{ $product->description }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Update Product</button>
        </form>
    </div>
    {{-- Include the footer --}}
    @include('products.footer')
