@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Historique des actions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Action</th>
                <th>Cuve</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($historiques as $historique)
                <tr>
                    <td>{{ $historique->id }}</td>
                    <td>{{ $historique->user->name }}</td>
                    <td>{{ $historique->action }}</td>
                    <td>{{ $historique->cuve ? $historique->cuve->nom_cuve : 'N/A' }}</td>
                    <td>{{ $historique->created_at->format('d/m/Y H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
