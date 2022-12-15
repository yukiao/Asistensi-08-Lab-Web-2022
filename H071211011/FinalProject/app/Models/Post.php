<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['judul', 'sampul', 'konten','slug','category_id', 'id_user','views'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function tag(){
        return $this->belongsToMany(Tag::class, 'post_tag','id_post','id_tag');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('id', 'desc');
    }

}
