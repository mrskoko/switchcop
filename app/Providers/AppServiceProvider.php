<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GameService\GameService;
use App\Services\GameService\GameServiceInterface;
use App\Repositories\GameRepository\GameRepository;
use App\Repositories\GameRepository\GameRepositoryInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton(GameServiceInterface::class, GameService::class);
        app()->singleton(GameRepositoryInterface::class, GameRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
