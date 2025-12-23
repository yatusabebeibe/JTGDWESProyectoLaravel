<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/autenticacion.css">
</head>
<body>
    <x-header/>

    <div id="login">
        <h2>Iniciar sesion</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="nombrelogin" id="nombre" placeholder="nombre">
            <input type="password" name="contraseñalogin" id="contraseña" placeholder="contraseña">
            <button>Iniciar sesion</button>
        </form>
    </div>
</body>
</html>