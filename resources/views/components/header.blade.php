<header>
    <h1>{{ Route::currentRouteName() }}</h1>
    @auth
        <div style="display: flex; align-items: center; gap: 15px;">
            <a href="/usuario/{{ auth()->guard()->user()->id }}">{{ auth()->guard()->user()->name }}</a>
            <form action="/logout" method="post">
                @csrf
                <button>Cerrar sesión</button>
            </form>
        </div>
    @else
        <div class="auth-links">
            <a href="/register">Registrarse</a>
            <a href="/login">Iniciar sesión</a>
        </div>
    @endauth
</header>