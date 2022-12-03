<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){

        $data = Mahasiswa::paginate(10);
    
        return view('mahasiswa', compact('data'));
    }

    public function tambahmahasiswa() {
        return view('tambahdata');
    }

    public function insertdata(Request $request) {
        // dd($request->all());
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id) {
        $data = Mahasiswa::find($id);
        // dd($data);
        return view ('tampilkan', compact('data'));
    }

    public function updatedata(Request $request, $id) {
        $data = Mahasiswa::find($id);
        $data->update($request->all());

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id) {
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Dihapus');
    }
}
