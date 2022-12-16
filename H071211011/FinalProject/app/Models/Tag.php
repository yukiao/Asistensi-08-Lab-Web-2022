<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = ['name','slug', 'description'];

    public function post()
    {
        return $this->belongsToMany(Post::class, 'post_tag', 'id_tag', 'id_post');
    }
}
