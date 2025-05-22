<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

use App\Repositories\LoginRepository;
use App\Repositories\LoginRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\VehicleRepository;
use App\Repositories\VehicleRepositoryInterface;
use App\Repositories\ProfileRepository;
use App\Repositories\ProfileRepositoryInterface;
use App\Repositories\ReportPDFRepository;
use App\Repositories\ReportPDFRepositoryInterface;
use App\Repositories\VehiclesDriversRepository;
use App\Repositories\VehiclesDriversRepositoryInterface;
use App\Repositories\CountrieRepository;
use App\Repositories\CountrieRepositoryInterface;
use App\Repositories\CityRepository;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\TypeDocumentRepository;
use App\Repositories\TypeDocumentRepositoryInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(LoginRepositoryInterface::class, LoginRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(VehicleRepositoryInterface::class, VehicleRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
        $this->app->bind(ReportPDFRepositoryInterface::class, ReportPDFRepository::class);
        $this->app->bind(VehiclesDriversRepositoryInterface::class, VehiclesDriversRepository::class);
        $this->app->bind(CountrieRepositoryInterface::class, CountrieRepository::class);
        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
        $this->app->bind(TypeDocumentRepositoryInterface::class, TypeDocumentRepository::class);
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
