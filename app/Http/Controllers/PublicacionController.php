<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\User;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    public function crearPublicacion(Request $peticion) {
        $camposRecibidos = $peticion->validate([
            "titulo" => "required",
            "cuerpo" => "required"
        ]);

        $camposRecibidos["titulo"] = strip_tags($camposRecibidos["titulo"]);
        $camposRecibidos["cuerpo"] = strip_tags($camposRecibidos["cuerpo"]);
        $camposRecibidos["id_usuario"] = auth()->guard()->id();
        Publicacion::create($camposRecibidos);

        return redirect("/");
    }

    public function mostrarPublicacion(Publicacion $idPublicacion) {
        return view("publicacion", ["publicacion"=>$idPublicacion, "usuario"=>User::find($idPublicacion->id_usuario)]);
    }

    public function actualizar(Publicacion $idPublicacion, Request $peticion) {
        $esAutorPublicacion = $idPublicacion->id_usuario == auth()->guard()->user()->id;
        $noEnviaDatos = empty($peticion->all()["titulo"]);

        if ( $esAutorPublicacion ) {
            if ( $noEnviaDatos ) { return $this->mostrarPantallaActualizar($idPublicacion); }

            $camposRecibidos = $peticion->validate([
                "titulo" => "required",
                "cuerpo" => "required"
            ]);

            $camposRecibidos["titulo"] = strip_tags($camposRecibidos["titulo"]);
            $camposRecibidos["cuerpo"] = strip_tags($camposRecibidos["cuerpo"]);

            $idPublicacion->update($camposRecibidos);
        }
        return redirect("/");
    }
    public function mostrarPantallaActualizar(Publicacion $idPublicacion) {
        return view("editar-publicacion", ["publicacion" => $idPublicacion]);
    }


    public function eliminar(Publicacion $idPublicacion) {
        $esAutorPublicacion = $idPublicacion->id_usuario == auth()->guard()->user()->id;

        if ( $esAutorPublicacion ) {
            $idPublicacion->delete();
        }

        return redirect("/");
    }
}
