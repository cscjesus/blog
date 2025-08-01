<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//php artisan make:controller PostController
class PostController extends Controller
{
    public function index()
    {
        $etiqueta = "Este es un parrafo de ejemplo";
        $etiqueta2 = "<b> y este es otro parrafo de ejemplo</b>";
        return view('posts.index',compact('etiqueta','etiqueta2'));
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
        return view('posts.show',compact('post'));
    }
    public function edit($post)
    {
        return view('posts.edit',compact('post'));
    }
    public function update($post)
    {
        return "se actualiza el post $post";
    }
    public function destroy($post)
    {
        return "se elimina el post $post";
    }
}
