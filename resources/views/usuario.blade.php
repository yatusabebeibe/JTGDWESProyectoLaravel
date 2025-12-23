<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario {{ $usuario->name }}</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/inicio.css">
    <link rel="stylesheet" href="/assets/css/publicaciones.css">
    <style>
        /* Layout principal usando IDs existentes */
        main > div:not(#volver) {
            display: flex;
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Panel izquierdo: usuario + formulario */
        #cajaUsuario {
            margin-top: 10px;
            position: sticky; top: 3rem;
            height: max-content;
        }
        #usuario {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            flex: 1;
            min-width: 380px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }

        /* Panel derecho: publicaciones */
        #publicaiones {
            flex: 2;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Estilo usuario */
        #usuario img {
            width: 120px;
            height: 120px;
            border-radius: 20%;
            object-fit: cover;
            margin: 0 auto;
            border: 3px solid rgb(0, 100, 255);
            transition: border-color 0.2s;
        }

        #usuario img:hover {
            border-color: rgb(0, 150, 255);
        }

        #usuario h4 {
            --color: rgb(0, 100, 255);
            color: var(--color);
            font-size: 24px;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 5px;
            border-bottom: 1px solid var(--color);
            display: inline-block;
            padding-bottom: 3px;
        }

        #usuario h4:hover {
            --color: rgb(0, 150, 255);
            color: var(--color);
            border-bottom: 1px solid var(--color);
        }

        #usuario p {
            color: #777;
            font-size: 14px;
            margin-top: 5px;
        }

        /* Responsive para móvil */
        @media (max-width: 900px) {
            main {
                flex-direction: column;
            }
            #usuario, #publicaiones {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <x-header/>

    <main>
        <x-volver-a-inicio/>
        <div>
            <div id="cajaUsuario">
                <div id="usuario">
                    <img src="https://picsum.photos/200/200" alt="Imagen Perfil">
                    <h4>{{ $usuario->name }}</h4>
                    <p>{{ $usuario->email }}</p>
                </div>
                @auth @if (auth()->guard()->user()->id == $usuario->id)
                <x-crear-publicacion/>
                @endif @endauth
            </div>
            <x-publicaciones :publicaciones="$publicaciones"/>
        </div>
    </main>

</body>
</html>
