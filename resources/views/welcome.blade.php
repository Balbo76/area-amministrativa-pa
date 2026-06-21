<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvenuto - Portale Istituzionale</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@include('layouts.navbar')
<section class="bg-primary text-white py-5">
    <div class="container py-5 text-center">
        <h2 class="display-5 fw-bold mb-3">Semplice, digitale, vicino a te.</h2>
        <p class="lead mb-4">Accedi alle istanze online e monitora le tue pratiche amministrative.</p>
        <a href="{{ route('login') }}" class="btn btn-light text-primary fw-bold px-4 py-2 shadow">Entra nell'Area Riservata</a>
    </div>
</section>
</body>
</html>
