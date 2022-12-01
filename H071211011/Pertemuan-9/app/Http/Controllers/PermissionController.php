<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\permission;

class PermissionController extends Controller
{
    public function index()
    {
        return view('permission', [
            "data" => permission::orderBy('updated_at', 'desc')->paginate(5)

        ]);
    }


    public function add()
    {
        return view('permission');
    }

    public function store(Request $request)
    {
        $permission = new permission();
        $permission->name = $request->input('name');
        $permission->description = $request->input('description');
        $permission->status = $request->input('status');
        $permission->save();
        return redirect()->back()->with('status', 'Berhasil Menambahkan Data');
    }

    public function edit($id)
    {

        $singleData = permission::find($id);
        return view('edit.editPermission', compact('singleData'));
    }

    public function update(Request $request, $id)
    {
        $singleData = permission::find($id);
        $singleData->update($request->all());

        return redirect()->intended('/permission');
        // ->with('status', 'Berhasil Mengupdate Data');
    }

    public function delete($id)
    {
        $singleData = permission::find($id);
        $singleData->delete();
        return redirect()->back();
    }
}
