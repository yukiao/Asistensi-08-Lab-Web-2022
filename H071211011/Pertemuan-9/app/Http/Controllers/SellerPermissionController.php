<?php

namespace App\Http\Controllers;

use App\Models\permission;
use Illuminate\Http\Request;
use App\Models\sellerPermission;
use App\Models\seller;

class SellerPermissionController extends Controller
{
    public function index()
    {
        $Slr = seller::all();
        $Perm = permission::all();
        $slrPerm = sellerPermission::with('seller', 'permission')->get();
        return view('sellerPermission', [
            "data" => sellerPermission::orderBy('updated_at', 'desc')->paginate(5)
        ], compact('Slr', 'Perm', 'slrPerm'));
    }


    public function add()
    {
        return view('sellerPermission');
    }

    public function store(Request $request)
    {
        $sellerPerm = new sellerPermission();
        $sellerPerm->seller_id = $request->input('seller_id');
        $sellerPerm->permission_id = $request->input('permission_id');
        $sellerPerm->save();
        return redirect()->back()->with('status', 'Berhasil Menambahkan Data');
    }

    public function edit($id)
    {

        $singleData = sellerPermission::find($id);
        $Slr = seller::all();
        $Perm = permission::all();
        $slrPerm = sellerPermission::with('seller', 'permission')->get();
        return view('edit.editSellerPermission', compact('singleData', 'Slr', 'Perm', 'slrPerm'));
    }

    public function update(Request $request, $id)
    {
        $singleData = sellerPermission::find($id);
        $singleData->update($request->all());

        return redirect()->intended('/sellerPermission');
        // ->with('status', 'Berhasil Mengupdate Data');
    }

    public function delete($id)
    {
        $singleData = sellerPermission::find($id);
        $singleData->delete();
        return redirect()->back();
    }
}
