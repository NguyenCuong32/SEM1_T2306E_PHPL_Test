<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        echo "Begin store to database";
        $data = $request->all();
        $data['producttype']= $request->producttype;
        $data['productcode']= $request->productcode;
        $data['productname']= $request->productname;
        $data['quantity']= $request->quantity;
        $data['note']= $request->note;
        $request->validate([
            'producttype'=> 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'productcode'=> 'required|regex:/^[a-zA-Z0-9\s]+$/',
        ]);
        Product::create($data);
        return redirect('product/list')->with('success','');
        //echo "Save to database done";
    }
    public function list(){
        $products=Product::all();
        return view('products.list',compact("products"));
    }
    public function edit($id){
        $product = Product::find($id);
        return view("products.edit",compact("product"));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->producttype=$request->producttype;
        $product->productcode=$request->productcode;
        $product->productname=$request->productname;
        $product->quantity=$request->quantity;
        $product->note=$request->note;
        $product->save();
        return redirect('product/list')->with('success','');
        //echo "Database is updated!";
    }
}
