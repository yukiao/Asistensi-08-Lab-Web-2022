<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Akademik;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;





class AkademikController extends Controller
{
    public function index(){
        return view('akademik', [
            "title" => "Data Mahasiswa",
           
        ]);
    }
    // public function show(){
    //     return view('akademik', [
    //         "title" => "Data Mahasiswa",
    //         'data' => DB::table('akademiks')->paginate(10)
    //     ]);
    // }

    public function add(){
        return view('akademik', [
            "title" => "Tambah Data",

        ]);
    }
   
    public function store(Request $request)
    {
        $student = new Akademik();
        $student->nim = $request->input('nim');
        $student->nama = $request->input('nama');
        $student->alamat = $request->input('alamat');
        $student->fakultas = $request->input('fakultas');
        $student->save();
        return redirect()->back()->with('status', 'Berhasil Menambahkan Data');
    }

    public function edit($id){
        
        $singleData = Akademik::find($id);
        return view('editdata', [
            "title" => "Edit Data",

        ], compact('singleData'));
    }

    public function update(Request $request, $id){
        $singleData = Akademik::find($id);
        $singleData->update($request->all());
       
        return redirect()->intended('/dataMhs');
        // ->with('status', 'Berhasil Mengupdate Data');
    }

    public function delete($id){
        $singleData = Akademik::find($id);
        $singleData->delete();
        return redirect()->back();
    }
}
