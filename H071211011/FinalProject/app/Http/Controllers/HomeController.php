<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = DB::table('posts')
            ->select('category_id', DB::raw('count(posts.id) as total_artikel'))
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->whereColumn('categories.id', 'posts.category_id')
            ->groupBy('category_id')
            ->orderByDesc('total_artikel')
            ->limit(5)
            ->get();
        dd($count);
        return view('home');
    }
}
