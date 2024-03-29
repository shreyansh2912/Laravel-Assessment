<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_name',
        'singer',
        'album',
        'genre',
        'song_file',
        'image',
    ];
}
