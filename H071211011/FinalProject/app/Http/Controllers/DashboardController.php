<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_post = Post::count();
        $jumlah_kategori = Category::count();
        $jumlah_tag = Tag::count();
        $jumlah_member = DB::table('model_has_roles')->where('role_id', 2)->count();
        $count_like = DB::table('posts')
            ->select('judul','sampul','slug','created_at',DB::raw('count(like.id_user) as total_like'))
            ->Join('like', 'like.id_post', '=', 'posts.id')
            ->groupBy('judul','sampul','slug','created_at')
            ->orderByDesc('total_like')
            ->limit(3)
            ->get();
        // dd($count_like);
        $count_view = DB::table('posts')
        ->select('sampul', 'judul', 'slug', 'created_at')
        ->orderByDesc('views')
        ->limit(3)
        ->get();

        $count_comment = DB::table('posts')
        ->select('judul','sampul','slug','posts.created_at',DB::raw('count(comments.user_id) as total_comment'))
        ->Join('comments', 'comments.post_id', '=', 'posts.id')
        ->groupBy('judul', 'sampul', 'slug', 'posts.created_at')
        ->orderByDesc('total_comment')
        ->limit(3)
        ->get();

       

        return view('admin/dashboard', compact('jumlah_post', 'jumlah_kategori', 'jumlah_tag','jumlah_member','count_like','count_view', 'count_comment'));
    }
}
