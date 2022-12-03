<?php

namespace App\Http\Controllers;

use App\Models\seller;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        return view('seller', [
            "data" => seller::orderBy('updated_at', 'desc')->paginate(5)
        ]);
    }


    public function add()
    {
        return view('seller');
    }

    public function store(Request $request)
    {
        $seller = new seller();
        $seller->name = $request->input('name');
        $seller->address = $request->input('address');
        $seller->gender = $request->input('gender');
        $seller->no_hp = $request->input('no_hp');
        $seller->status = $request->input('status');
        $seller->save();
        return redirect()->back()->with('status', 'Berhasil Menambahkan Data');
    }

    public function edit($id)
    {

        $singleData = seller::find($id);
        return view('edit.editSeller', compact('singleData'));
    }

    public function update(Request $request, $id)
    {
        $singleData = seller::find($id);
        $singleData->update($request->all());

        return redirect()->intended('/seller');
        // ->with('status', 'Berhasil Mengupdate Data');
    }

    public function delete($id)
    {
        $singleData = seller::find($id);
        $singleData->delete();
        return redirect()->back();
    }
}
