<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
        Route::pattern("id","\d+");
        // Route::resourceVerbs([
        //     'create' => 'crear',
        //     'edit' => 'editar',
        // ]);
        View::share('prueba', 'Estos es un mensaje de prueba compartido a todas las vistas');
    }
}
