<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
          'post_id'=> 3,
          'user_id'=> 2,
          'comment'=> 'nice'
        ]);
        Comment::create([
          'post_id'=> 3,
          'user_id'=> 4,
          'comment'=> 'good'
        ]);
        Comment::create([
          'post_id'=> 3,
          'user_id'=> 5,
          'comment'=> 'nice'
        ]);
        Comment::create([
          'post_id'=> 3,
          'user_id'=> 3,
          'comment'=> 'very nice'
        ]);
        Comment::create([
          'post_id'=> 6,
          'user_id'=> 6,
          'comment'=> 'so nice'
        ]);
        Comment::create([
          'post_id'=> 6,
          'user_id'=> 7,
          'comment'=> 'so good'
        ]);
        Comment::create([
          'post_id'=> 6,
          'user_id'=> 3,
          'comment'=> 'very good'
        ]);
        Comment::create([
          'post_id'=> 9,
          'user_id'=> 4,
          'comment'=> 'i love this'
        ]);
        Comment::create([
          'post_id'=> 9,
          'user_id'=> 6,
          'comment'=> 'so bad'
        ]);
        Comment::create([
          'post_id'=> 9,
          'user_id'=> 2,
          'comment'=> 'not bad'
        ]);
        Comment::create([
          'post_id'=> 9,
          'user_id'=> 3,
          'comment'=> 'good'
        ]);
        Comment::create([
          'post_id'=> 9,
          'user_id'=> 5,
          'comment'=> 'nice'
        ]);
        Comment::create([
          'post_id'=> 11,
          'user_id'=> 5,
          'comment'=> 'nice'
        ]);
        Comment::create([
          'post_id'=> 16,
          'user_id'=> 6,
          'comment'=> 'nice'
        ]);
        Comment::create([
          'post_id'=> 20,
          'user_id'=> 7,
          'comment'=> 'nice'
        ]);
        Comment::create([
          'post_id'=> 8,
          'user_id'=> 8,
          'comment'=> 'nice'
        ]);
        Comment::create([
          'post_id'=> 10,
          'user_id'=> 6,
          'comment'=> 'nice'
        ]);
        Comment::create([
          'post_id'=> 17,
          'user_id'=> 2,
          'comment'=> 'nice'
        ]);
        Comment::create([
          'post_id'=> 15,
          'user_id'=> 7,
          'comment'=> 'nice'
        ]);
        Comment::create([
          'post_id'=> 19,
          'user_id'=> 4,
          'comment'=> 'nice'
        ]);
    }
}
