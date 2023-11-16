<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller{
    public function index(){
        $products = Product::all();
        return view("index",compact("products"));
    }
    public function store(Request $request)
    {
        $request->validate([
            'ProductType' => 'required|alpha_num|max:3',
            'ProductCode' => 'required|alpha_num|max:6',
            'ProductName' => 'required|max:50',
            'Quantity' => 'required|numeric',
            'Note' => 'nullable|max:60',
        ]);
    
        Product::create($request->all());
    
        return redirect()->route('products.index')->with('success', 'Sản phẩm được thêm thành công.');
    }
    public function create()
    {
        return view('create');
    }
public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    $request->validate([
        'ProductType' => 'required|alpha_num|max:3',
        'ProductCode' => 'required|alpha_num|max:6',
        'ProductName' => 'required|max:50',
        'Quantity' => 'required|numeric',
        'Note' => 'nullable|max:60',
    ]);

    $product->update($request->all());

    return redirect()->route('products.index')->with('success', 'Sản phẩm được cập nhật thành công.');
}

}
