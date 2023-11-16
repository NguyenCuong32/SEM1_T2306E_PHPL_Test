<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store()
    {
        $validatedData = request()->validate([
            'type' => 'required|string|max:3',
            'code' => 'required|string|max:6',
            'name' => 'required|string|max:50',
            'quantity' => 'required|numeric',
            'note' => 'required'
        ]);

        $product = new Product();
        $product->ProductType = $validatedData['type'];
        $product->ProductCode = $validatedData['code'];
        $product->ProductName = $validatedData['name'];
        $product->Quantity = $validatedData['quantity'];
        $product->Note = $validatedData['note'];
        $product->save();

        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function update($id)
    {
        $validatedData = request()->validate([
            'type' => 'required|string|max:3',
            'code' => 'required|string|max:6',
            'name' => 'required|string|max:50',
            'quantity' => 'required|numeric',
            'note' => 'required'
        ]);

        $product = Product::find($id);
        $product->ProductType = $validatedData['type'];
        $product->ProductCode = $validatedData['code'];
        $product->ProductName = $validatedData['name'];
        $product->Quantity = $validatedData['quantity'];
        $product->Note = $validatedData['note'];
        $product->save();

        return redirect()->route('product.index');
    }

    public function report()
    {
        $products = Product::all();
        return view('product.report', compact('products'));
    }


}
