<?php

namespace App\Providers;

use App\Repositories\MealRepository;
use App\Repositories\DiaryRepository;
use App\Repositories\ColumnRepository;
use App\Repositories\RecordRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\MealRepositoryInterface;
use App\Repositories\Contracts\DiaryRepositoryInterface;
use App\Repositories\Contracts\ColumnRepositoryInterface;
use App\Repositories\Contracts\RecordRepositoryInterface;

class RepositoryProvider extends ServiceProvider
{
    /**
     * The repository mappings for the application.
     *
     * @var array
     */
    protected $repositories = [
        DiaryRepositoryInterface::class => DiaryRepository::class,
        MealRepositoryInterface::class => MealRepository::class,
        RecordRepositoryInterface::class => RecordRepository::class,
        ColumnRepositoryInterface::class => ColumnRepository::class,
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $class) {
            $this->app->singleton($interface, $class);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
