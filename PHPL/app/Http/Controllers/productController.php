<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function index(){
        $products = product::all();
        return view('product.index',compact("products"));
        // echo'list product';

    }
    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
        $data = $request->all();
        $data['ProductType']=$request->ProductType;
        $data['ProductCode']=$request->ProductCode;
        $data['Quantity']=$request->Quantity;
        $data['Note']=$request->Note;
      
        product::create($data);
       echo "Save to database done";
       return redirect('product/index')->with('success','');
    }

public function edit($id){
    $products = product::find($id);
    return view("product.edit",compact("products"));
}


public function update(Request $request, $id)
{
    // 
    $product = product::find($id);
    $product->ProductType=$request->ProductType;
    $product->ProductCode=$request->ProductCode;
    $product->ProductName=$request->ProductName;
    $product->Quantity=$request->Quantity;
    $product->Note=$request->Note;

    $product->save();
    return redirect('product/index')->with('success','');
    // echo "updated";
}

 function delete($id) {

    $product = product::find($id);
    $product->delete();
    return redirect('product/index')->with('success','');

}}
