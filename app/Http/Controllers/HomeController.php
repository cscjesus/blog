<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//php artisan make:controller HomeController
class HomeController extends Controller
{
    //
    // public function index()  {
    //     return "Hola desde inicio";
    // }
    public function __invoke()
    {
        return view("welcome");
    }
}
