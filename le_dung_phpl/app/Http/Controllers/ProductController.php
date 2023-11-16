<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("products.index",compact("products"));
    }

    public function create(){
        return view("products.add");
    }
    public function add(Request $request){
        $rule =[
            "ProductType"=> "required",
            "ProductCode"=> "required",
            "ProductName"=> "required",
            "Quantity"=> "required",
            "Note"=> "string",
        ];
        $message=[
            "required"=> ":attribute required",
            "string"=> "not contain special characters ",
        ];
        $request->validate($rule,$message);

        $data = $request->all();
        $data["ProductType"] = $request->input("ProductType");
        $data["ProductCode"] = $request->input("ProductCode");
        $data["ProductName"] = $request->input("ProductName");
        $data["Quantity"] = $request->input("Quantity");
        $data["Note"] = $request->input("Note");

        Product::create($data);
        return redirect()->route("index");
    }
    public function edit($id){
        $product = Product::find($id);
        return view("products.edit",compact("product"));
    }
    public function update(Request $request, $id){
        $data= $request->all();
        $products=Product::find($id);
        $products->update($data);
        return redirect()->route("index");
    }
    public function report(){
        $products = Product::all();
        return view("products.report",compact("products"));
    }
    

}

