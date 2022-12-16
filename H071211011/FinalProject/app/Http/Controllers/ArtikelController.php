<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;
use App\Models\Like;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Post::select('sampul', 'judul', 'slug', 'created_at')->latest()->paginate(9);
        $kategori = Category::select('slug', 'name')->orderBy('name', 'asc')->get();
        $artikel_list = true;
        $author = User::select('id', 'name')->orderBy('name', 'asc')->get();
        return view('/artikel/index', compact('artikel', 'kategori', 'artikel_list', 'author'));
    }

    public function home()
    {
        $artikel = Post::select('sampul', 'judul', 'slug', 'created_at')->latest()->paginate(9);

        $kategori = Category::select('id', 'name')->orderBy('name', 'asc')->get();
        $home = true;
        $author = User::select('id', 'name')->orderBy('name', 'asc')->get();
        $count_category = DB::table('posts')
            ->select('categories.name', 'categories.slug', DB::raw('count(posts.id) as total_artikel'))
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->whereColumn('categories.id', 'posts.category_id')
            ->groupBy('categories.name', 'categories.slug')
            ->orderByDesc('total_artikel')
            ->limit(5)
            ->get();

        $count_post= DB::table('users')
            ->select('users.name', 'users.id', DB::raw('count(posts.id) as total_artikel'))
            ->join('posts', 'posts.id_user', '=', 'users.id')
            ->whereColumn('users.id', 'posts.id_user')
            ->groupBy('users.name', 'users.id')
            ->orderByDesc('total_artikel')
            ->limit(5)
            ->get();

        $count_view = DB::table('posts')
        ->select('sampul', 'judul', 'slug', 'created_at')
        ->orderByDesc('views')
        ->limit(5)
        ->get();
       
        return view('/artikel/home', compact('artikel','kategori', 'home', 'author','count_category','count_post','count_view'));
    }

    public function artikel($slug)
    {
        $artikel = Post::select('id', 'judul', 'konten', 'category_id','created_at', 'sampul','id_user')->where('slug',$slug)->firstOrfail();
        $kategori = Category::select('slug', 'name')->orderBy('name', 'asc')->get();
        $author = User::select('id', 'name')->orderBy('name', 'asc')->get();
        $like = Like::where('id_post', $artikel->id)->count();

        DB::table('posts')->where('slug', $slug)->increment('views');
        $count_view = DB::table('posts')->select('views')->where('slug', $slug)->get();
        
        return view('/artikel/artikel', compact('artikel', 'kategori', 'author','like', 'count_view'));
    }

    public function kategori($slug)
    {
        $kategori = Category::select('id')->where('slug',$slug)->firstOrfail();
        $artikel = Post::select('sampul', 'judul', 'slug', 'created_at')->where('category_id',$kategori->id)->latest()->paginate(9);
        $kategori_dipilih = Category::select('name', 'slug')->where('slug', $slug)->firstOrFail();
        $kategori = Category::select('slug', 'name')->orderBy('name', 'asc')->get();
        $author = User::select('id', 'name')->orderBy('name', 'asc')->get();
        return view('/artikel/index', compact('artikel', 'kategori', 'kategori_dipilih','author'));
    }

    public function tag($slug)
    {
        $artikel = Tag::select('id')->where('slug', $slug)->latest()->firstOrfail();
        $artikel = $artikel->post;
        $kategori = Category::select('slug', 'name')->orderBy('name', 'asc')->get();
        $tag_dipilih = Tag::select('name')->where('slug', $slug)->firstOrFail();
        $author = User::select('id', 'name')->orderBy('name', 'asc')->get();
        return view('/artikel/index', compact('artikel', 'kategori', 'tag_dipilih', 'author'));
    }


    public function author($id)
    {
        
        $kategori = Category::select('slug', 'name')->orderBy('name', 'asc')->get();
        $author_dipilih = User::select('id','name')->whereId($id)->firstOrFail();
        $author = User::select('id', 'name')->orderBy('name', 'asc')->get();
        $artikel = Post::select('sampul', 'judul', 'slug', 'created_at','id_user')->where('id_user',$author_dipilih->id)->latest()->paginate(9);
        // $author = User::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
        // ->where('role_id', 2)
        // ->select('id', 'name')
        // ->get();
        // dd($author);
        return view('/artikel/index', compact('artikel', 'kategori', 'author_dipilih', 'author'));
    }

    public function comment(Request $request, $slug)
    {
        $request->validate([
            'comment' => 'required'
        ]);
        $artikel = Post::select('id', 'judul', 'konten', 'category_id', 'created_at', 'sampul', 'id_user')->where('slug', $slug)->firstOrfail();

        $data = new Comment;
        $data->user_id = $request->user()->id;
        $data->post_id = $artikel->id;
        $data->comment = $request->comment;
        $data->save();
        return redirect('/' . $slug . '' );
    }

}
