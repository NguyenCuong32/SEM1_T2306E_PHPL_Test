<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request){
        echo 'Start database storing.';
        $data=$request->all();
        $data['ProductionType']=$request->ProductionType;
        $data['ProductionCode']=$request->ProductionCode;
        $data['ProductionName']=$request->ProductionName;
        $data['Quantity']=$request->Quantity;
        $data['Note']=$request->Note;
    }

    public function create(){
        return view('product');
    }

    public function edit(id){
        $product=Product::find($id);
        return view('product',$product);
    }

    public function update(Request $request){
        $product=Product::find($request->id);
        
    }
}
