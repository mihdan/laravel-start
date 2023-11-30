<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @link https://www.amitmerchant.com/eloquent-strict-mode-in-laravel/
     */
    public function boot(): void
    {
        Model::shouldBeStrict();
    }
}
