<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {   
        
        $search = '';
        if (request()->search) {
            $artikel = Post::select('id', 'id_user')->where('id_user', Auth::user()->id)->firstOrfail();
            $post = Post::select('id', 'judul','konten','slug', 'sampul','category_id', 'created_at', 'id_user')->where('id_user', Auth::user()->id)->where('judul', 'LIKE', '%' . request()->search . '%')->latest()->paginate(5);
            $search = request()->search;
            $suka = Like::where('id_post', $artikel->id)->count();
            if (count($post) == 0) {
                request()->session()->flash('search', '
                    <div class="alert alert-success mt-4" role="alert">
                        Data yang anda cari tidak ada
                    </div>
                ');
            }
        }else{
            $artikel = Post::select('id', 'id_user')->where('id_user', Auth::user()->id)->firstOrfail();
            $post = Post::select('id','judul','konten','created_at')->where('id_user', Auth::user()->id)->latest()->paginate(5);
            
            $count_like = DB::table('posts')
                ->select('posts.id',DB::raw('count(like.id_user) as total_like'))
                ->leftJoin('like','like.id_post', '=','posts.id')
                ->where('posts.id_user', $artikel->id_user)
                ->groupBy('posts.id')
                ->get();
         
        }
        return view('admin/post/index', compact('post', 'search','count_like','artikel'));
    }

    public function create()
    {
        $tag = Tag::select('id', 'name')->get();
        $category = Category::select('id', 'name')->get();
        return view('admin/post/create', compact('category','tag'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'sampul' => 'required|mimes:jpg,jpeg,png',
            'konten' => 'required',
            'category' => 'required',
            'tag' => 'required',
        ]);
        $sampul = time() . '-' . $request->sampul->getClientOriginalName();
        $request->sampul->move('upload/post', $sampul);

        Post::create([
            'sampul' => $sampul,
            'judul' => $request->judul,
            'konten' => $request->konten,
            'category_id' => $request->category,
            'slug' => Str::slug($request->judul, '-'),
            'id_user' => Auth::user()->id,
        ])->tag()->attach($request->tag);

        Alert::success('success', 'Data Berhasil Ditambahkan');

        return redirect('/post');
    }

    public function show($id)
    {
        $post = Post::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->where('id_user', Auth::user()->id)->firstOrFail();
        return view('admin/post/show', compact('post'));
    }

    public function edit($id)
    {
        $tag = Tag::select('id', 'name')->get();
        $category = Category::select('id', 'name')->get();
        $post = Post::select('id', 'judul', 'sampul', 'konten', 'category_id')->whereId($id)->where('id_user', Auth::user()->id)->firstOrFail();
        return view('admin/post/edit', compact('post', 'category','tag'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'sampul' => 'mimes:jpg,jpeg,png',
            'konten' => 'required',
            'category' => 'required',
            'tag' => 'required',
            
        ]);

        $data = [
            'judul' => $request->judul,
            'konten' => $request->konten,
            'category_id' => $request->category,
            'slug' => Str::slug($request->judul, '-'),
            'id_user' => Auth::user()->id
        ];

        $post = Post::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {
            File::delete('upload/post/' . $post->sampul);

            $sampul = time() . '-' . $request->sampul->getClientOriginalName();
            $request->sampul->move('upload/post', $sampul);

            $data['sampul'] = $sampul;
        }
        $post->update($data);
        $post->tag()->sync($request->tag);

        Alert::success('success', 'Data Berhasil Diupdate');
        return redirect('/post');
    }

    public function konfirmasi($id)
    {
        alert()->question('Peringatan !', 'Anda yakin akan menghapus data ?')
        ->showConfirmButton('<a href="/post/' . $id . '/delete" class="text-white" style="text-decoration: none"> Hapus</a>', '#3085d6')->toHtml()
            ->showCancelButton('Batal', '#aaa')->reverseButtons();

        return redirect('/post');
    }
    public function delete($id)
    {
        $post = Post::select('sampul', 'id')->whereId($id)->where('id_user', Auth::user()->id)->firstOrfail();
        File::delete('upload/post/' . $post->sampul);
        $post->delete();

        Alert::success('success', 'Data Berhasil Dihapus');

        return redirect('/post');
    }
}
