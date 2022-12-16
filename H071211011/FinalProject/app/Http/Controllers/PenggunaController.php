<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $search = '';
        if (request()->search) {
            $pengguna = User::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->where('role_id', 2)
            ->where('name', 'LIKE', '%' . request()->search . '%')
            ->select('id', 'name', 'email')
            ->paginate(5);
            $search = request()->search;
    
            if (count($pengguna) == 0) {
                request()->session()->flash('search', '
                    <div class="alert alert-success mt-4" role="alert">
                        Data yang anda cari tidak ada
                    </div>
                ');
            }
        } else {
            $pengguna = User::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->where('role_id', 2)
            ->select('id', 'name', 'email')
            ->orderByDesc('created_at')
            ->paginate(5);
            
       
        }
        return view('admin/pengguna/index', compact('pengguna', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pengguna/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ])->assignRole('admin');

        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/pengguna');
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin/pengguna/edit', compact('user'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ])->assignRole('admin');

        Alert::success('success', 'Data Berhasil Diupdate');
        return redirect('/pengguna');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function konfirmasi($id)
    {
        alert()->question('Peringatan !', 'Anda yakin akan menghapus data ?')
        ->showConfirmButton('<a href="/pengguna/' . $id . '/delete" class="text-white" style="text-decoration: none"> Hapus</a>', '#3085d6')->toHtml()
            ->showCancelButton('Batal', '#aaa')->reverseButtons();

        return redirect('/pengguna');
    }

    public function delete($id)
    {
        // $deleted = DB::table('model_has_roles')->where('model_id', $id)->delete();
        User::whereId($id)->delete();

        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/pengguna');
    }
}
