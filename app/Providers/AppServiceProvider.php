<?php

namespace App\Providers;

use App\Models\Movie;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $latest_movies = Movie::orderBy('created_at', 'desc')->take(5)->get();
        View::share('latest_movies', $latest_movies);
    }
}
