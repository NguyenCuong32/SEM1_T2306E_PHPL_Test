<?php
//a
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Nội dung của phương thức index() ở đây
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'productType' => 'required|regex:/^[a-zA-Z0-9]+$/|max:3',
            'productCode' => 'required|regex:/^[a-zA-Z0-9]+$/|max:6',
            'productName' => 'required|max:50',
            'quantity' => 'required',
        ]);

        $product = new Product();
        $product->productType = $request->productType;
        $product->productCode = $request->productCode;
        $product->productName = $request->productName;
        $product->quantity = $request->quantity;
        $product->note = $request->note;
        $product->save();

        return redirect('/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'productType' => 'required|regex:/^[a-zA-Z0-9]+$/|max:3',
            'productCode' => 'required|regex:/^[a-zA-Z0-9]+$/|max:6',
            'productName' => 'required|max:50',
            'quantity' => 'required',
        ]);

        $product = Product::find($id);
        $product->productType = $request->productType;
        $product->productCode = $request->productCode;
        $product->productName = $request->productName;
        $product->quantity = $request->quantity;
        $product->note = $request->note;
        $product->save();

        return redirect('/products');
    }
}
