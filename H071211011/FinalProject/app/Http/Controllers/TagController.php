<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    public function index()
    {

        $search = '';
        if (request()->search) {
            $tag = Tag::select('id',  'name', 'created_at')->where('name', 'LIKE', '%' . request()->search . '%')->latest()->paginate(5);
            $search = request()->search;

            if (count($tag) == 0) {
                request()->session()->flash('search', '
                    <div class="alert alert-success mt-4" role="alert">
                        Data yang anda cari tidak ada
                    </div>
                ');
            }
        } else {
            $count_artikel = DB::table('tags')
            ->select('tags.id', DB::raw('count(post_tag.id_post) as total_artikel'))
            ->leftJoin('post_tag', 'tags.id', '=', 'post_tag.id_tag')
            ->groupBy('tags.id')
            ->get();

            
            $tag = Tag::select('id', 'name', 'created_at')->latest()->paginate(5);        
        }
        return view('admin/tag/index', compact('tag','search', 'count_artikel'));
    }

    public function create()
    {
        return view('admin/tag/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags',
            'description' => 'required',
        ]);

        Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description
        ]);
        Alert::success('success', 'Data Berhasil Ditambahkan');
        return redirect('/tag');
    }

    public function edit($id)
    {

        $tag = Tag::find($id);
        return view('admin/tag/edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:tags',
            'description' => 'required',
        ]);

        Tag::whereId($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description
        ]);

        Alert::success('success', 'Data Berhasil Diupdate');
        return redirect('/tag');
    }

    public function konfirmasi($id)
    {
        alert()->question('Peringatan !', 'Anda yakin akan menghapus data ?')
        ->showConfirmButton('<a href="/tag/' . $id . '/delete" class="text-white" style="text-decoration: none"> Hapus</a>', '#3085d6')->toHtml()
            ->showCancelButton('Batal', '#aaa')->reverseButtons();

        return redirect('/tag');
    }

    public function delete( $id)
    {
        Tag::whereId($id)->delete();

        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect('/tag');
    }
}
