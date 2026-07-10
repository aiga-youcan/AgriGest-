<!DOCTYPE html>
<html>
<head>
    <title>Ajouter parcelle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>➕ Ajouter une parcelle</h2>

<form method="POST" action="{{ route('parcelles.store') }}">
@csrf

<div class="mb-2">
    <input class="form-control" name="nom" placeholder="Nom">
</div>

<div class="mb-2">
    <input class="form-control" name="culture" placeholder="Culture">
</div>

<div class="mb-2">
    <input class="form-control" name="superficie" type="number" step="0.01" placeholder="Superficie">
</div>

<div class="mb-2">
    <input class="form-control" name="date_plantation" type="date">
</div>

<div class="mb-2">
    <select class="form-control" name="statut">
        <option>En culture</option>
        <option>Récoltée</option>
        <option>En jachère</option>
    </select>
</div>

<button class="btn btn-success">Ajouter</button>

</form>

</body>
</html>