<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Services\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    // Display all products
    public function index()
    {
        $products = $this->productService->getAllProducts();
        return view('products.index', compact('products'));
    }

    // Show the form to create a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a new product
    public function store(ProductRequest $request)
    {
        $this->productService->createProduct($request->validated());

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    // Show the form to edit a product
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update a product
    public function update(ProductRequest $request, Product $product)
    {
        $this->productService->updateProduct($product, $request->validated());

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    // Delete a product
    public function destroy(Product $product)
    {
        $this->productService->deleteProduct($product);

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

    public function allProductsApi()
    {
        $products = $this->productService->getAllProducts();
        return view('products.jsonResponse', compact('products'));
    }

    public function postProductApi(ProductRequest $request)
    {
        $this->productService->postAPi($request->validated());
        return response()->json(['message' => 'Product created successfully!', 'product' => $request]);
    }

    public function deleteProductApi($id)
    {
        // Call the service method to delete the product by ID
        $this->productService->deleteProductById($id);

        // Return a success response
        return response()->json(['message' => 'Product deleted successfully!', 'product_id' => $id]);
    }
}
