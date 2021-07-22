<?php

namespace App\Providers;

use App\Http\Controllers\LaravelMultiDispatcher;
use App\Http\Controllers\MultiDispatcher;
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
        $this->app->bind(MultiDispatcher::class, LaravelMultiDispatcher::class);
    }
}
