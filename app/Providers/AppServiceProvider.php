<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

use App\Repositories\LoginRepository;
use App\Repositories\LoginRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(LoginRepositoryInterface::class, LoginRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
