<!DOCTYPE html>
<html lang="it" class="bootstrap-italia-scope">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/build/assets/logo-PC-Veneto.png">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">

    @include('private.layout.navbar')

    <div class="container-fluid">
        <div class="row">
            <!-- Barra di Navigazione Laterale -->
            <nav class="col-md-3 col-lg-2 bg-white vh-100 border-end pt-3">
                <ul class="nav flex-column gap-2">
                    <li class="nav-item">
                        <a class="nav-link text-dark py-2 px-3 rounded {{ request()->routeIs('admin.dashboard') ? 'bg-primary text-white font-weight-bold' : '' }}"
                           href="{{ route('admin.dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark py-2 px-3 rounded {{ request()->routeIs('admin.profile') ? 'bg-primary text-white font-weight-bold' : '' }}"
                           href="{{ route('admin.profile') }}">
                            Mio Profilo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark py-2 px-3 rounded {{ request()->routeIs('admin.pc-icons') ? 'bg-primary text-white font-weight-bold' : '' }}"
                           href="{{ route('admin.pc-icons') }}">
                            Icone
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Contenuto Centrale -->
            <main class="col-md-9 col-lg-10 p-4">
                <h1 class="h3 text-primary mb-4 border-bottom pb-2">@yield('page-title')</h1>
                @yield('content')
            </main>
        </div>
    </div>

    @include('private.layout.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Verifica che i componenti interattivi di Bootstrap Italia siano agganciati correttamente
        });
    </script>
</body>
</html>
