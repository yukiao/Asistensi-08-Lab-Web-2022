<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request){
        $request->validate([
           'comment' => 'required'
        ]);

        $post = Post::where('slug', $request->post_slug)-> firstorFail();
       
            Comment::create([
                'post_id' => $post->id,
                'user_id' => Auth::user()->id,
                'comment' => $request->comment
            ]);
            return redirect('/artikel/artikel');
        }
    
}
