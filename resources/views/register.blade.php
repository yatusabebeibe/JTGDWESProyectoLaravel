<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/autenticacion.css">
</head>
<body>
    <x-header/>

    <div id="register">
        <h2>Registro</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="nombre" id="nombre" placeholder="nombre">
            <input type="text" name="email" id="email" placeholder="correo">
            <input type="password" name="contraseña" id="contraseña" placeholder="contraseña">
            <button>Registrarse</button>
        </form>
    </div>
</body>
</html>