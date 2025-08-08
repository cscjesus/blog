<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class)->name("home.index");
/*
Route::prefix("/posts")->name("posts.")->controller(PostController::class)->group(function () {
    //ruta para listar registros
    Route::get("/", "index")->name("index");
    //ruta mostrar formulario crear registro
    Route::get("/create", "create")->name("create");
    //ruta guardar registro
    Route::post("/","store")->name("create");
    // ruta mostrar registro
    Route::get("/{post}", "show")->name("show");
    //ruta mostrar formulario editar registro
    Route::get("/{post}/edit", "edit")->name("edit");
    //ruta actualziar registro
    Route::put("/{post}", "update")->name("update");
    //ruta eliminar registro
    Route::delete("/{post}", "destroy")->name("destroy");
});




//Route::apiResource('home', HomeController::class);

// Route::resource('posts', PostController::class)
//     ->except(["create", "edit"]);

// Route::resource('posts', PostController::class)
//     ->only(["index", "show"]);

Route::resource('articles', PostController::class)->parameters(['articles' => 'post'])
    ->names('posts');
*/

Route::resource('posts', PostController::class);
// seccion 7 video 4
//docker exec -it 527 bash
// comentario agregado a proposito