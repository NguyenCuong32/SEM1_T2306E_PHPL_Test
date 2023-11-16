<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class ProductController extends Controller
{
    public function create(){
        return view("product");
    }
    public function index(){
        $products=Product::all();
        return view("product/index",compact("product"));
    }
    public function store(Request $request){
        // echo "begin store";
        $data=$request->all();
        $data['producttype']=$request->ProductType;
        $data['productcode']=$request->ProductCode;
        $data['productname']=$request->ProductName;
        $data['quantity']=$request->Quantity;
        $data['note']=$request->Note;
        Product::create($data);  
        
        return \redirect('product/index')-> with('success','');      
    }
   
}
