@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1>Bienvenue sur la gestion de la cuverie</h1>
    @auth
        <p>Connecté en tant que : {{ auth()->user()->name }}</p>
    @else
        <p>Veuillez vous connecter pour accéder aux fonctionnalités.</p>
    @endauth
@endsection
