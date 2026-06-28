@extends('public.layout.public-layout')
@section('title', 'Registrati')
@section('content')
    <div class="container align-items-center">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow border-0">
                    <div class="card-body p-4">



                        <div class="container" id="main-container">
                            <div class="row">
                                <div class="col-12 col-lg-10 offset-lg-1">
                                    <div class="cmp-breadcrumbs" role="navigation">
                                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                                            <ol class="breadcrumb p-0" data-element="breadcrumb">
                                                <li class="breadcrumb-item"><a href="homepage.html">Home</a><span class="separator">/</span></li>
                                                <li class="breadcrumb-item active" aria-current="page">Accedi</li>
                                            </ol>
                                        </nav>
                                    </div>        <div class="cmp-heading pb-3 pb-lg-4">
                                        <h1 class="title-xxxlarge">Accedi</h1>

                                        <p class="subtitle-small">Per accedere al sito e ai suoi servizi, utilizza una delle seguenti modalità.</p>





                                    </div>
                                </div>
                            </div>
                            <hr class="d-none d-lg-block mt-0 mb-4">
                            <div class="row">
                                <div class="col-12 col-lg-8 offset-lg-2">
                                    <div class="cmp-text-button mt-3">
                                        <h2 class="title-xxlarge mb-0">SPID</h2>
                                        <div class="text-wrapper">
                                            <p class="subtitle-small mb-3">Accedi con SPID, il sistema Pubblico di Identità Digitale.</p>
                                        </div>
                                        <div class="button-wrapper mb-2">
                                            <button type="button" class="btn btn-icon btn-re square" data-focus-mouse="false">


                                                <img src="../assets/images/spid.svg" alt="Entra con SPID" class="me-2">

                                                <span class="">Entra con SPID</span>
                                            </button>
                                        </div>

                                        <a class="simple-link" href="#">Come attivare SPID <span class="visually-hidden">Come attivare SPID</span></a>
                                    </div>

                                    <div class="cmp-text-button">
                                        <h2 class="title-xxlarge mb-0">CIE</h2>
                                        <div class="text-wrapper">
                                            <p class="subtitle-small mb-3">Accedi con la tua Carta d’Identità Elettronica.</p>
                                        </div>
                                        <div class="button-wrapper mb-2">
                                            <button type="button" class="btn btn-icon btn-re square">


                                                <img src="../assets/images/cie.svg" alt="Entra con CIE" class="me-2">

                                                <span class="">Entra con CIE</span>
                                            </button>
                                        </div>

                                        <a class="simple-link" href="#">Come richiedere CIE <span class="visually-hidden">Come richiedere CIE</span></a>
                                    </div>

                                    <div class="cmp-text-button">
                                        <h2 class="title-xxlarge mb-0">Altre utenze</h2>
                                        <div class="text-wrapper">
                                            <p class="subtitle-small mb-3">In alternativa puoi utilizzare le seguenti modalità.</p>
                                        </div>
                                        <div class="button-wrapper d-md-flex">
                                            <button type="button" class="btn btn-outline-primary btn-re pr-md-4 bg-white" data-focus-mouse="false">



                                                <span class="">Accedi con ID azienda</span>
                                            </button>
                                            <button type="button" class="btn btn-outline-primary btn-re bg-white">



                                                <span class="">Accedi come dipendente</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>





                    <h3 class="h5 text-dark mb-4 fw-bold">Crea Account</h3>
                    <form method="POST" action="{{ route('register') }}">
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" required>
                                <label for="name">Nome Completo</label>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <input type="email" class="form-control" id="email" required>
                                <label for="email">Indirizzo Email</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Registrati</button>
                    </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
