@extends('layouts.app')

@section('content')

<h2>🌱 Liste des parcelles</h2>

<a href="{{ route('parcelles.create') }}" class="btn btn-success mb-3">
    + Ajouter une parcelle
</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Nom</th>
            <th>Culture</th>
            <th>Superficie</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
    @foreach($parcelles as $parcelle)
        <tr>
            <td>{{ $parcelle->nom }}</td>
            <td>{{ $parcelle->culture }}</td>
            <td>{{ $parcelle->superficie }}</td>
            <td>{{ $parcelle->statut }}</td>
            <td>
                <a href="{{ route('parcelles.show', $parcelle->id) }}" class="btn btn-primary btn-sm">Voir</a>
                <a href="{{ route('parcelles.edit', $parcelle->id) }}" class="btn btn-warning btn-sm">Modifier</a>

                <form action="{{ route('parcelles.destroy', $parcelle->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection