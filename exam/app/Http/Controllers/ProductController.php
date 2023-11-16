<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function edit($id){
        $products = Product::find($id);
        return view("products.edit",compact("products"));
    }
    public function index(){
        $products= Product::all();
        return view('products.index', compact("products"));
    }
    public function report(){
        $products= Product::all();
        return view('products.report', compact("products"));
    }
    //
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $data = $request->all();
        $data['ProductType']=$request->ProductType;
        $data['ProductCode']=$request->ProductCode;
        $data['ProductName']= ($request->ProductName);
        $data['Quantity']=$request->Quantity;
        $data['Note']= ($request->Note);
        Product::create($data);
       echo "Save to database done";
    }
    public function update(Request $request, $id){
        $product= Product::find($id);
        $product->ProductType=$request->ProductType;
        $product->ProductCode=$request->ProductCode;
        $product->ProductName= ($request->ProductName);
        $product->Quantity= ($request->Quantity);
        $product->Note= ($request->Note);
        $product->save();
       echo "update";
       return redirect("product/index") -> with('success','');
    }
}
