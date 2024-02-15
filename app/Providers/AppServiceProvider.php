<?php

namespace App\Providers;

use App\Services\ArrayMenuService;
use Illuminate\Support\ServiceProvider;
use App\Services\MenuServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(MenuServiceInterface::class, fn() => new ArrayMenuService());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
