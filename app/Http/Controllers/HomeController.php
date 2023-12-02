<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    private const CACHE_KEY = 'home_latest_articles';
    private const CACHE_TTL = 3600;

    /**
     * @return Application|Factory|View
     * @link https://laravel.com/docs/10.x/cache#cache-usage
     */
    public function index(): Application|Factory|View {
        if (Cache::has(self::CACHE_KEY)) {
            $articles = Cache::get(self::CACHE_KEY);
        } else {
            $articles = Article::query()
                ->select(['id', 'title', 'thumbnail'])
                ->orderByDesc('created_at')
                ->limit(6)
                ->get();

            Cache::set(self::CACHE_KEY, $articles, self::CACHE_TTL);
        }

        return view('home', ['items' => $articles]);
    }
}
