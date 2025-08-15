<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//php artisan make:controller PostController
class PostController extends Controller
{
    public function index()
    {
       $posts = [
            ['id' => 1, 'title' => 'Post 1', 'content' => 'Content of Post 1'],
            ['id' => 2, 'title' => 'Post 2', 'content' => 'Content of Post 2'],
            ['id' => 3, 'title' => 'Post 3', 'content' => 'Content of Post 3'],
        ];
        $dia = 10;
        
        return view('posts.index',compact('posts','dia'));
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
