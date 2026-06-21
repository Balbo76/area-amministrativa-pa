<header class="it-header-wrapper">
    <div class="it-header-slim-wrapper bg-primary">
        <div class="container-fluid px-4">
            <div class="row pt-1 pb-1">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <!-- Logo / Link per tornare sempre alla Home pubblica -->
                    <a class="navbar-brand text-white fw-bold d-flex align-items-center text-decoration-none" href="{{ route('welcome') }}">
                        <svg class="icon icon-white icon-sm me-2" style="width:24px; height:24px;">
                            <use href="/bootstrap-italia/dist/svg/sprites.svg#it-pa"></use>
                        </svg>
                        <span>Area Amministrativa PA</span>
                    </a>

                    <div class="it-header-slim-wrapper-content">
                        @auth
                            <!-- UTENTE LOGGATO: Mostra il Dropdown Menu di Amministrazione -->
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm text-white d-flex align-items-center" type="button" id="userMenuDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-sm bg-white text-primary fw-bold me-2 d-flex align-items-center justify-content-center rounded-circle" style="width: 28px; height: 28px; font-size: 0.8rem;">
                                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 2)) }}
                                    </div>
                                    {{ Auth::user()->name ?? 'Amministratore' }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userMenuDropdown">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.dashboard') }}">
                                            <svg class="icon icon-sm me-2"><use href="/bootstrap-italia/dist/svg/sprites.svg#it-presentation"></use></svg>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile') }}">
                                            <svg class="icon icon-sm me-2"><use href="/bootstrap-italia/dist/svg/sprites.svg#it-user"></use></svg>
                                            Mio Profilo
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST" class="m-0">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger d-flex align-items-center w-100 bg-transparent border-0 text-start">
                                                <svg class="icon icon-danger icon-sm me-2"><use href="/bootstrap-italia/dist/svg/sprites.svg#it-logout"></use></svg>
                                                Esci
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <!-- UTENTE NON LOGGATO: Mostra i link di accesso pubblici -->
                            <div class="d-flex gap-2">
                                <a href="{{ route('login') }}" class="btn btn-light btn-sm text-primary fw-bold">Accedi</a>
                                <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm text-white">Registrati</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
