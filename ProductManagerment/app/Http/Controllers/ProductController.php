<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products =Product::all();
        return view('products.index', compact('products'));
    }

    public function create(Request $request)
    { 
        return view('products.create');
    }

    public function store(Request $request)
    {
            $data = $request->all();
            $data['product_code']=$request->product_code;
            $data['product_name']=$request->product_name;
            $data['quantity']=($request->quantity);
            $data['productType']= ($request->productType);
            $data['note']= ($request->note);
            Product::create($data);
           echo "Save to database done";
        }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
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