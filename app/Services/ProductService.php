<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function createProduct(array $data)
    {
        return Product::create($data);
    }

    public function updateProduct(Product $product, array $data)
    {
        $product->update($data);
        return $product;
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
    }

    public function getAllProducts()
    {
        return Product::all();
    }

    public function postApi($request)
    {
        $data['name'] = $request->input('name');
        $data['price'] = $request->input('price');
        $data['description'] = $request->input('description');
        Product::create($data);

        return response()->json(['message' => 'Product created successfully!', 'product' => $data]);
    }
}
