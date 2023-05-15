<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use App\Services\PostDateTime;
use App\Services\PostTime;
use App\Contracts\Date;

class DateTimeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Date::class, function ($app) {
            return new PostDateTime();
        });

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind("PostTime", function ($app) {
            return new PostDateTime();
        });
    }
}
