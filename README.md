# Laravel Blog App (Practica)

Este repositorio contiene una aplicacion web basica desarrollada con **Laravel**, creada unicamente con el objetivo de **probar y aprender Laravel** para un [trabajo de clase](https://github.com/yatusabebeibe/JTGDWESProyectoDWES/blob/master/doc/EstudioFramework.md#estudio-del-framework-laravel).

La aplicacion simula un blog sencillo con usuarios y publicaciones.

## Funcionalidades

* Registro de usuarios
* Inicio y cierre de sesion
* Creacion de publicaciones
* Edicion y borrado de publicaciones **solo por su autor**
* Visualizacion de todas las publicaciones en la pagina principal
* Visualizacion individual de cada publicacion mediante su propia URL
* Perfil de usuario con sus datos y publicaciones

## Comportamiento de la aplicacion

* En la **pagina de inicio** se muestran todas las publicaciones de todos los usuarios, ordenadas de la mas reciente a la mas antigua.
* Cada publicacion tiene su propia URL para verse de forma individual
* Cada usuario tiene un **perfil publico** donde se muestra:

  * Nombre de usuario
  * Correo electronico
  * Todas sus publicaciones, ordenadas de la mas reciente a la mas antigua
* Un usuario **solo puede editar o borrar sus propias publicaciones**, no las de otros usuarios.

## Objetivo del proyecto

Este proyecto **no esta pensado para produccion**.
Su unico objetivo es servir como practica academica para familiarizarse con:

* Laravel
* Rutas
* Controladores
* Vistas
* Autenticacion basica
* Relacion entre datos/tablas

## Tecnologias usadas

* PHP
* Laravel
* Blade
* MariaBD