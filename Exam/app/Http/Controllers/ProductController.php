<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
            $products=Product::all();
            return view('products.index',compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ProductType'=>'required',
            'ProductCode'=>'required',
            'ProductName'=>'required',
            'Quantity'=>'required',
            'Note'=>'required',
        ]);
        $data = $request->all();
        $data['ProductType']=$request->ProductType;
        $data['ProductCode']=$request->ProductCode;
        $data['ProductName']= $request->ProductName;
        $data['Quantity']= $request->Quantity;
        $data['Note']= $request->Note;
        Product::create($data);
       return redirect('index')->with('success','');
    }
    public function edit($id){
        $product = Product::find($id);
        return view("products.edit",compact("product"));
    }
    public function update(Request $request,$id){
       $product=Product::find($id);
       $product->ProductType=$request->ProductType;
       $product->ProductCode=$request->ProductCode;
       $product->ProductName=$request->ProductName;
       $product->Quantity=$request->Quantity;
       $product->Note=$request->Note;
       $product->save();
       echo "<b>Product was updated</b>";
       return redirect('product/index')->with('success','');
    }
    public function destroy(Request $request, $id){
        $product=Product::find($id);
        $product->delete();
        return redirect('product/index')->with('success','');
    }
}
