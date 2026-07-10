<!DOCTYPE html>
<html>
<head>
    <title>AgriGest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="{{ route('parcelles.index') }}">
            🌱 AgriGest
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('parcelles.index') }}">Parcelles</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('parcelles.create') }}">Ajouter</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<main class="container mt-4 flex-grow-1">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© {{ date('Y') }} AgriGest - Tous droits réservés 🌿</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>