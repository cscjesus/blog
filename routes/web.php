<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return route("cursos.show",["id"=>4]);
});
Route::get("/contacto", function () {
    return "Hola desde contacto utilizando GET";
});

Route::get("/cursos/informacion", function () {
    return "Bienvenido a la informacion de los cursos";
})->name("cursos.informacion");

Route::get("/cursos/{id}", function ($id) {
    return "Bienvenido al curso con id: $id";
})->name("cursos.show");


Route::get("/cursos/{curso}", function ($curso) {
    return "Bienvenido al curso: $curso";
})->whereIn("curso",["php","laravel","vue"]);

// Route::get("/cursos/{curso}/{category?}", function ($curso, $category = null) {
//     if ($category)
//         return "Bienvenido al curso: $curso con la categoria: $category";
//     else
//         return "Bienvenido al curso: $curso";
// });

// Route::get("/cursos/{curso}", function ($curso) {

//         return "Bienvenido al curso: $curso";
// });
//validar ruta con regex
// Route::get("/cursos/{curso}/{category}", function ($curso,$category) {

//     return "Bienvenido al curso: $curso y categoria: $category";
// })->where(["curso" => "[A-Za-z]{3,}",
//             "category"=>"\w{3,}"]);

// Route::get("/cursos/{curso}", function ($curso) {
//     return "Bienvenido al curso: $curso";
// })->whereAlpha("curso");


// php artisan route:list
// php artisan route:list --except-vendor
// php artisan route:list --only-vendor