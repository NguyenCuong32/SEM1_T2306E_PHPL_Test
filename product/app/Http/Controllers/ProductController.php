<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store( Request $request){
        $data = $request->all();
        $data['ProductType']= $request->ProductType;
        $data['ProductCode']= $request->ProductCode;
        $data['ProductName']= $request->ProductName;
        $data['Quantity']= $request->Quantity;
        $data['Note']= $request->Note;
        Product::create($data);
        echo'Them database thanh cong';
        return redirect('product/index')->with('cuccsess','');
    }
    public function edit($id){
    $product = Product::find($id);
    return view('product.edit',compact('products'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->ProductType = $request->ProductType;
        $product->ProductCode = $request->ProductCode;
        $product->ProductName = $request->ProductName;
        $product->Quantity = $request->Quantity;    
        $product->Note = $request->Note;
        $product->save();
        echo 'update';
        return redirect('product/index')->with('cuccsess','');
    }
    public function index(){
        $products = Product::all();
        return view('product.index',compact('products'));
    }
    public function create(){
        return view('product.create');
}
}
