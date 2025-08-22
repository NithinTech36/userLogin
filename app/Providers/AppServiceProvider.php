<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Wellness\WellnessgroupRespository;
use App\Repositories\Wellness\WellnessgroupRepositoryInterface;
use App\Repositories\Wellness\WellnessinterestsRepository;
use App\Repositories\Wellness\WellnessinterestsRepositoryInterface;
use App\Repositories\Wellnesspillars\WellnesspillarsRespository;
use App\Repositories\Wellnesspillars\WellnesspillarsRespositoryInterface;
use App\Repositories\User\UserRespositoryInterface;
use App\Repositories\User\UserRespository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        $this->app->bind(WellnessgroupRepositoryInterface::class, WellnessgroupRespository::class);
        $this->app->bind(WellnessinterestsRepositoryInterface::class, WellnessinterestsRepository::class);
        $this->app->bind(WellnesspillarsRespositoryInterface::class, WellnesspillarsRespository::class);
        $this->app->bind(UserRespositoryInterface::class, UserRespository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
