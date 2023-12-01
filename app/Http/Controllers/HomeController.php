<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        Debugbar::info('test');

        $a = User::query()->inRandomOrder()->first()->value('id');
        dd($a);

        return view('welcome');
    }
}
