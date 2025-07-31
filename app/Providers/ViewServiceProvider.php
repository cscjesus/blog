<?php

namespace App\Providers;

use App\View\Composers\CompanyComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    //php artisan make:provider ViewServiceProvider
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        View::share('prueba', 'Estos es un mensaje de prueba compartido a todas las vistas');
        //compartir una variable a todas las vistas listadas
        // View::composer('welcome', function ($view) {
        //     $view->with('titulo', CompanyComposer::class);
        // });
        View::composer(['welcome'], //nombre de las vistas que podran acceder a la variable
         CompanyComposer::class);//clase donde estan las variables
    }
}
