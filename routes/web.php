<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return "Hola desde inicio";
});
//ruta para listar registros
Route::get("/posts",function(){
    return "Hola desde la pagian de posts";
});
//ruta mostrar formulario crear registro
Route::get("/posts/create",function(){
    return "Hola desde el formulario de crear post";
});
//ruta guardar registro
Route::post("/posts",function(){
    return "Guardar post desde el formulario";
});
// ruta mostrar registro
Route::get("/posts/{post}",function($post){
    return "se mostrar post $post";
});
//ruta mostrar formulario editar registro
Route::get("/posts/{post}/edit",function($post){
    return "se muestra el formulario con el post $post para editar";
});
//ruta actualziar registro
Route::put("/posts/{post}",function($post){
    return "se actualiza el post $post";
});
//ruta eliminar registro
Route::delete("/posts/{post}",function($post){
    return "se elimina el post $post";
});