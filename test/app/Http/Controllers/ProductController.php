<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('product/index', compact('products'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_type' => 'required|string|max:3','required|regex:/^[a-zA-Z]+$/',
            'product_code' => 'required|string|max:6','required|regex:/^[a-zA-Z0-9]+$/',
            'product_name' => 'required|string|max:50',
            'quantity' => 'nullable|numeric|min:0',
            'note' => 'nullable|string|max:60',
        ]);

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_code' => 'required',
            'product_name' => 'required',
            'quantity' => 'required|integer',
            'productType' => 'required|interger',
            'note' => 'required|interger',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
