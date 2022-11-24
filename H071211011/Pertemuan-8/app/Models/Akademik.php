<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    use HasFactory;
    protected $table = "akademiks";
    protected $fillable = ['nim', 'nama', 'alamat', 'fakultas'];
}
