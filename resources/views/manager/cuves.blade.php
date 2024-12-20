@extends('layouts.app')

@section('title', 'Liste des Cuves')

@section('content')
    <h1>Liste des cuves</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Volume Maximum</th>
                <th>Contenu Actuel</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cuves as $cuve)
                <tr>
                    <td>{{ $cuve->nom_cuve }}</td>
                    <td>{{ $cuve->volume_max }} L</td>
                    <td>
                        @foreach($cuve->mouts as $mout)
                            <p>{{ $mout->type }} : {{ $mout->volume }} L</p>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
