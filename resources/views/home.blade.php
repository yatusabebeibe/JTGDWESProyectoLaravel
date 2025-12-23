<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/inicio.css">
    <link rel="stylesheet" href="/assets/css/publicaciones.css">
</head>
<body>
    <x-header/>

    <main>
        @auth
            <x-crear-publicacion/>
            <x-publicaciones :publicaciones="$publicaciones"/>
        @endauth
    </main>
</body>
</html>
