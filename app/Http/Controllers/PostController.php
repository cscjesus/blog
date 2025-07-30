<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//php artisan make:controller PostController
class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    public function create()
    {
                return view('posts.create');

    }
    public function store()
    {
        return "Guardar post desde el formulario";
    }
    public function show($post)
    {
                return view('posts.show');

    }
    public function edit($post)
    {
                return view('posts.edit');

    }
    public function update($post) {
        return "se actualiza el post $post";
    }
    public function destroy($post) {
         return "se elimina el post $post";
    }
}
