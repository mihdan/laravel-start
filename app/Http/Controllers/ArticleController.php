<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->select(['id', 'title', 'thumbnail'])
            ->orderByDesc('created_at')
            ->paginate(6);

        return view('articles.index', ['items' => $articles]);
    }

    public function show()
    {
        return view('home');
    }
}
