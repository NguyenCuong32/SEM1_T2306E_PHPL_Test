<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $request->validate([
            'ProductType'=>'required|alpha_num|max:3',
            'ProductCode'=>'required|alpha_num|max:6',
            'ProductName'=>'required',
            'Quantity'=>'required|numeric',
        ]);
        $data = $request->all();
        $data['productType'] = $request->ProductType;
        $data['productCode'] = $request->ProductCode;
        $data['productName'] = $request->ProductName;
        $data['quantity'] = $request->Quantity;
        $data['note'] = $request->Note;
        
        Product::create($data);
        return redirect('product/index')->with('success', 'Product added successfully');
    }

    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id){
       $product = Product::find($id);
       $request->validate([
            'ProductType'=>'required|alpha_num|max:3',
            'ProductCode'=>'required|alpha_num|max:6',
            'ProductName'=>'required',
            'Quantity'=>'required|numeric',
        ]);
       $product->update($request->all());
       return redirect('product/index')->with('success', 'Product updated successfully');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('product/index')->with('success', 'Product deleted successfully');
    }

    public function generateReport(){
        $report = Product::select('productType', \DB::raw('SUM(quantity) as totalQuantity'))
            ->groupBy('productType')
            ->get();

        return view('products.report', compact('report'));
    }
}