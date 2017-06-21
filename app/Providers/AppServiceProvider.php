<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

     private static $repositories = [
        'product' => [
            'App\Repositories\Product\ProductRepository',
            'App\Repositories\Product\ProductRepositoryInterface',
        ],
        'service' => [
            'App\Repositories\Service\ServiceRepository',
            'App\Repositories\Service\ServiceRepositoryInterface',
        ],
        'user' => [
            'App\Repositories\User\UserRepository',
            'App\Repositories\User\UserRepositoryInterface',
        ],
        'event' => [
            'App\Repositories\Combo\ComboRepository',
            'App\Repositories\Combo\ComboRepositoryInterface',
        ],
        'combo' => [
            'App\Repositories\Event\EventRepository',
            'App\Repositories\Event\EventRepositoryInterface',
        ],
     ];

    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (static::$repositories as $repositorie)
        {
            App::bind($repositorie[1], $repositorie[0]);
        }
    }
}
