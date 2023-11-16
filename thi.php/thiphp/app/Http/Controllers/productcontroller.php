<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function create(){
        return view("products.add");
    }
    public function add(Request $request){
        $rule=[
            "$ProductType"=>requeted

        ];
        $message=[];
        $this->validate($request,$rule,$message);

        $data=$request->all();
        $data["ProductType"]=$request->request("ProductType");
        $data["ProductCode"]=$request->request("ProductCode");
        $data["ProductName"]=$request->request("ProductName");
        $data["Quantity"]=$request->input("Quantity");
        $data["Note"]=$request->input("Note");

        product::create($data);
        return redirect()->route("product","index");
    }
}
