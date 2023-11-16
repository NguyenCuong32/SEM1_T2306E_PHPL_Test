<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function index()
    {
        $Product = ProductModel::all();
        return view("Product.read", compact("Product"));
    }
    public function create()
    {
        return view("Product.add");
    }
    public function add(Request $request)
    {
        $rule = [];
        $message = [];
        $this->validate($request, $rule, $message);

        $data = request()->all();
        $data["ProductType"] = $request->input("ProductType");
        $data["ProductCode"] = $request->input("ProductCode");
        $data["ProductName"] = $request->input("ProductName");
        $data["Quantity"] = $request->input("Quantity");
        ProductModel::create($data);
        return redirect()->route("Product.add");
    }
    public function edit($id)
    {
        $student = productModel::find($id);
        return view("product.edit", compact("product"));
    }
    public function update(Request $request, $id)
    {
        $data = request()->all();
        $product = productModel::fint($id);
        $product->update($data);
        return redirect()->route("index");
    }
    public function destroy(Request $request, $id)
    {
        $product = productModel::find($id);
        $product->delete();
        return redirect()->route("index");
    }
}

