<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'title',
        'description',
        'content',
        'source',
        'user_id',
    ];
}
