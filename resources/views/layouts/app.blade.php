<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestion Cuverie')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Accueil</a>
            @auth
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('users.index') }}">Gestion des Utilisateurs</a>
                @elseif(auth()->user()->role === 'manager')
                    <a href="{{ route('cuves.index') }}">Cuves</a>
                    <a href="{{ route('proprietaires.index') }}">Propriétaires</a>
                @elseif(auth()->user()->role === 'caviste')
                    <a href="{{ route('cuves.index') }}">Cuves</a>
                @endif
                <a href="{{ route('historique.index') }}">Historique</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Déconnexion</button>
                </form>
            @else
                <a href="{{ route('login') }}">Connexion</a>
            @endauth
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2024 Gestion Cuverie</p>
    </footer>
</body>
</html>

