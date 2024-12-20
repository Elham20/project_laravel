@extends('layouts.app')

@section('title', 'Gestion des Cuves')

@section('content')
    <h1>Gestion des Cuves</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cuves as $cuve)
                <tr>
                    <td>{{ $cuve->nom_cuve }}</td>
                    <td>
                        <form action="{{ route('cuves.addMout', $cuve->id) }}" method="POST">
                            @csrf
                            <input type="text" name="volume" placeholder="Volume">
                            <input type="text" name="type" placeholder="Type">
                            <button type="submit">Ajouter Moût</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
