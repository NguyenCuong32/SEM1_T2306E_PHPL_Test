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
    public function edit($id){
        $student=Product::find($id);
        return view("students/edit",compact('student'));
    }
    public function update(Request $request, $id){        
        $student=Product::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password=Hash::make($request->password);
        $student->save();
        return \redirect('student/index')-> with('success','');
    }
}
