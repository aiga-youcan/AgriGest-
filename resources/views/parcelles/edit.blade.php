<!DOCTYPE html>
<html>
<head>
    <title>Modifier Parcelle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>✏️ Modifier la parcelle</h2>

<form action="{{ route('parcelles.update', $parcelle->id) }}" method="POST" class="mt-3">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="nom" class="form-control" value="{{ $parcelle->nom }}" required>
    </div>

    <div class="mb-3">
        <label>Culture</label>
        <input type="text" name="culture" class="form-control" value="{{ $parcelle->culture }}" required>
    </div>

    <div class="mb-3">
        <label>Superficie</label>
        <input type="text" name="superficie" class="form-control" value="{{ $parcelle->superficie }}" required>
    </div>

    <div class="mb-3">
        <label>Statut</label>
        <select name="statut" class="form-control">
            <option value="active" {{ $parcelle->statut == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $parcelle->statut == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

    <button class="btn btn-success">💾 Sauvegarder</button>
    <a href="{{ route('parcelles.index') }}" class="btn btn-secondary">Annuler</a>
</form>

</body>
</html>