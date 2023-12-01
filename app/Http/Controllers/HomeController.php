<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View {

        $articles = Article::query()
            ->select(['id', 'title', 'thumbnail'])
            ->paginate(9);

        return view('home', ['articles' => $articles]);
    }
}
