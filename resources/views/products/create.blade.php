    {{-- Include the header --}}
    @include('products.header')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-3">Save Product</button>
        </form>
    </div>
    {{-- Include the footer --}}
    @include('products.footer')
