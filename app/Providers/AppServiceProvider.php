<?php

namespace App\Providers;

use App\Helpers\LocalizedCarbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Override existing Carbon date class
        \Illuminate\Support\Facades\Date::useClass(LocalizedCarbon::class);
    }
}
