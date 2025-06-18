<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//php artisan make:controller PostController
class PostController extends Controller
{
    public function index()
    {
        return "Hola desde la pagian de posts";
    }
    public function create()
    {
        return "Hola desde el formulario de crear post";
    }
    public function store()
    {
        return "Guardar post desde el formulario";
    }
    public function show($post)
    {
        return "se mostrar post $post";
    }
    public function edit($post)
    {
        return "se muestra el formulario con el post $post para editar";
    }
    public function update($post) {
        return "se actualiza el post $post";
    }
    public function destroy($post) {
         return "se elimina el post $post";
    }
}
