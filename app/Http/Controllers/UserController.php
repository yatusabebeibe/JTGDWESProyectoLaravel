<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(Request $peticion) {
        $camposRecibidos = $peticion->validate([
            "nombrelogin" => ['required'],
            "contraseñalogin" => ['required'],
        ]);

        if ( auth()->guard()->attempt([ 'name'=>$camposRecibidos['nombrelogin'], 'password'=>$camposRecibidos["contraseñalogin"] ]) ) {
            $peticion->session()->regenerate();
            return redirect("/");
        }

        return redirect("login");
    }
    public function register(Request $peticion) {
        $camposRecibidos = $peticion->validate([
            "nombre" => ['required', 'min:3', 'max:12', Rule::unique("users", "name")],
            "email" => ['required', 'email', Rule::unique("users", "email")],
            "contraseña" => ['required', 'min:4', 'max:22'],
        ]);

        $usuario = User::create([
            'name' => $camposRecibidos['nombre'],
            'email' => $camposRecibidos['email'],
            'password' => bcrypt($camposRecibidos["contraseña"]),
        ]);
        auth()->guard()->login($usuario);

        return redirect("/");
    }

    public function logout() {
        auth()->guard()->logout();
        return redirect("/");
    }

    public function mostrar(User $idUsuario) {
        $publicaciones =  $idUsuario->publicaciones()->latest()->get();
        return view("usuario", ["usuario"=>$idUsuario, "publicaciones"=> $publicaciones]);
    }
}
