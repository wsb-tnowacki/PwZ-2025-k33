<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $table = 'posty'; //tabelka jest teraz traktowana jako 'posty' a nie 'posts'
    protected $fillable = [
        'tytul',
        'autor',
        'email',
        'tresc'
    ];
}
