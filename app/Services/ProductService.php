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

    public function deleteProductById($id)
    {
        $product = Product::find($id);
        
        if ($product) {
            $product->delete();
            return response()->json(['message' => 'Product deleted successfully!']);
        } else {
            return response()->json(['message' => 'Product not found!'], 404);
        }
    }

    public function getAllProducts()
    {
        return Product::all();
    }

    public function postApi($request)
    {
        $data['name'] = $request['name'];
        $data['price'] = $request['price'];
        $data['description'] = $request['description'];
        Product::create($data);

        return response()->json(['message' => 'Product created successfully!', 'product' => $data]);
    }
}
