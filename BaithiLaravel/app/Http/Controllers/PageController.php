<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidatePage;
use App\Models\Page;

class PageController extends Controller
{
    public function create(ValidatePage $validatePage,Request $request){
        $data=$request->all();
        $data["producttype"]=$request->producttype;
        $data["productcode"]=$request->productcode;
        $data["productname"]=$request->productname;
        $data["quantity"]=$request->quantity;
        $data["note"]=$request->note;
        Request::create($data);
        dd("$validatePage");
        return redirect("/create");
    }

    public function show(){
        $products= Page::all();
        return view("page.show",compact("products"));
    }
    public function edit($id){
        $page= Page::find($id);
        return view("page.update",compact("page"));
    }
    public function update(Request $request, $id){
        $page= Page::find($id);
        

    }
}
