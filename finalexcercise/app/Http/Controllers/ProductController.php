<?php

namespace App\Http\Controllers;
use Hash;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("products/index", compact("products"));
    }
    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        echo'begin store to database';
        echo '<br>';
        $data = $request->all();
        $data['ProductType'] = $request->ProductType;
        $data['ProductCode'] = $request->ProductCode;
        $data['ProductName'] = $request->ProductName;
        $data['Quantity'] = $request->Quantity;
        $data['Note'] = $request->Note;
        Product::create($data);
        echo "Product info is added successfully";
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view("products.edit", compact("products"));
    }
    public function update(Request $request, $id){
        $products = Product::find($id);
        $products->ProductType = $request->ProductType;
        $products->Productcode = $request->ProductCode;
        $products->ProductName = $request->ProductName;
        $products->Quantity = $request->Quantity;
        $products->Note = $request->Note;
        $products->save();
        echo "Product has been updated";
        return redirect("products/index") -> with('success','');
    }
}
