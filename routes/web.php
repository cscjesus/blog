<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class)->name("home.index");
// //ruta para listar registros
// Route::get("/posts",[PostController::class,"index"])->name("posts.index");
// //ruta mostrar formulario crear registro
// Route::get("/posts/create",[PostController::class,"create"])->name("posts.create");
// //ruta guardar registro
// Route::post("/posts",[PostController::class,"store"])->name("posts.create");
// // ruta mostrar registro
// Route::get("/posts/{post}",[PostController::class,"show"])->name("posts.show");
// //ruta mostrar formulario editar registro
// Route::get("/posts/{post}/edit",[PostController::class,"edit"])->name("posts.edit");
// //ruta actualziar registro
// Route::put("/posts/{post}",[PostController::class,"update"])->name("posts.update");
// //ruta eliminar registro
// Route::delete("/posts/{post}",[PostController::class,"destroy"])->name("posts.destroy");

//Route::apiResource('home', HomeController::class);

// Route::resource('posts', PostController::class)
//     ->except(["create", "edit"]);

// Route::resource('posts', PostController::class)
//     ->only(["index", "show"]);

Route::resource('articles', PostController::class)->parameters(['articles' => 'post'])
->names('posts');