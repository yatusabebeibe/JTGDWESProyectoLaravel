<?php

use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\UserController;
use App\Models\Publicacion;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $publicaciones = /* if */ auth()->guard()->check()
//         ? auth()->guard()->user()->publicaciones()->latest()->get()
//         : [];
//     return view('home', [ "publicaciones"=> $publicaciones ]);
// }) -> name("Inicio");
// Route::get('/', function () {
//     return view('home', ["publicaciones"=>Publicacion::where("id_usuario",auth()->guard()->id())->get()]);
// }) -> name("Inicio");
Route::get('/', function () {
    return view('home', ["publicaciones"=>Publicacion::latest()->get()]);
}) -> name("Inicio");

Route::get('/login', function () { return view('login'); }) -> name("Iniciar sesion");
Route::post('/login', [UserController::class, "login"]) -> name("Logica iniciar sesion");
Route::get('/register', function () { return view('register'); }) -> name("Registrarse");
Route::post('/register', [UserController::class, "register"]) -> name("Logica registrarse");

Route::post('/logout', [UserController::class, "logout"]) -> name("Logica cerrar sesion");



// Rutas de las publicaciones

Route::post("/crear-publicacion",[PublicacionController::class, "crearPublicacion"]) -> name("Logica crear publicacion");

Route::get('/publicacion/{idPublicacion}', [PublicacionController::class, "mostrarPublicacion"]) -> name("Publicacion");
Route::patch("/publicacion/{idPublicacion}", [PublicacionController::class, "actualizar"]) -> name("Actualizar publicacion");
Route::delete("/publicacion/{idPublicacion}", [PublicacionController::class, "eliminar"]) -> name("Eliminar publicacion");



// Rutas de usuarios

Route::get('/usuario/{idUsuario}', [UserController::class, "mostrar"]) -> name("Usuario");