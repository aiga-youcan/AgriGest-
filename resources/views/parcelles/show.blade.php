<!DOCTYPE html>
<html>
<head>
    <title>Détails Parcelle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h2>🌱 Détails de la parcelle</h2>

    <div class="card mt-3">
        <div class="card-body">
            <p><strong>Nom :</strong> {{ $parcelle->nom }}</p>
            <p><strong>Culture :</strong> {{ $parcelle->culture }}</p>
            <p><strong>Superficie :</strong> {{ $parcelle->superficie }}</p>
            <p><strong>Statut :</strong> {{ $parcelle->statut }}</p>
        </div>
    </div>

    <a href="{{ route('parcelles.index') }}" class="btn btn-secondary mt-3">
        ← Retour
    </a>

</body>
</html>