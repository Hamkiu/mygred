<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Models;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


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
        Schema::defaultStringLength(191);

        View::composer('*', function ($view) {

            if (!Schema::hasTable('models')) {
                return;
            }

            $models = Models::orderBy('component_no')
                ->orderBy('sub_components_no')
                ->get();

            $components = $models->groupBy('components');

            $view->with('components', $components);
        });
    }
}
