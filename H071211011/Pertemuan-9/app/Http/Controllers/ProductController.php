<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\seller;
use App\Models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $Slr = seller::all();
        $Ctr = category::all();
        $prdct = product::with('seller', 'category')->get();
        return view('product', [
            "data" => product::orderBy('updated_at', 'desc')->paginate(5)

        ], compact('Slr', 'Ctr', 'prdct'));
    }




    public function add()
    {
        return view('product');
    }

    public function store(Request $request)
    {
        $product = new product();
        $product->name = $request->input('name');
        $product->seller_id = $request->input('seller_id');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->status = $request->input('status');
        $product->save();
        return redirect()->back()->with('status', 'Berhasil Menambahkan Data');
    }

    public function edit($id)
    {

        $singleData = product::find($id);
        $Slr = seller::all();
        $Ctr = category::all();
        $prdct = product::with('seller', 'category')->get();
        return view('edit.editProduct',  compact('singleData', 'Slr', 'Ctr', 'prdct'));
    }

    public function update(Request $request, $id)
    {
        $singleData = product::find($id);
        $singleData->update($request->all());

        return redirect()->intended('/product');
        // ->with('status', 'Berhasil Mengupdate Data');
    }

    public function delete($id)
    {
        $singleData = product::find($id);
        $singleData->delete();
        return redirect()->back();
    }
}
