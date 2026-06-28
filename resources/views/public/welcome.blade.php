@extends('public.layout.public-layout')
@section('title', 'Registrati')
@section('content')
<div class="it-hero-wrapper it-text-centered it-filter it-overlay mt-1 it-bottom-overlapping-content">
    <div class="img-responsive-wrapper">
        <div class="img-responsive">
            <div class="img-wrapper">
                <img src="build/assets/pc-image1.png" title="Applicativi informatici" alt="Applicativi informatici">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex">

                <div class="it-hero-text-wrapper">
                    <span class="it-category">Regione del Veneto · Protezione Civile</span>
                    <h1>Portale di supporto alle attività di Protezione Civile</h1>
                    <p>
                        Benvenuti nel portale di supporto delle attività di protezione civile della Regione del
                        Veneto.
                        Il portale mette a disposizione strumenti e accessi operativi per gli operatori del
                        Sistema
                        Regionale di Protezione Civile, con un’interfaccia più chiara, ordinata e fruibile su
                        ogni dispositivo.
                    </p>
                    <small>
                        I dati presentati nel portale non sostituiscono i dati cartografici ufficiali né i dati
                        presenti
                        nei piani comunali approvati. Le informazioni disponibili costituiscono uno strumento di
                        supporto
                        per gli Enti del sistema regionale di Protezione Civile.
                    </small>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-12 mb-3 mb-md-4">
                <article class="it-card rounded shadow border px-5 py-4">
                    <h3 class="it-card-title h4">
                        Servizi e applicativi
                    </h3>
                    <!--card body content-->
                    <div class="it-card-body">

                        <article class="it-card it-card-inline it-card-image rounded shadow-sm border">
                            <div class="it-card-inline-content">
                                <h3 class="it-card-title ">
                                    <a href="#">Applicativi informatici</a>
                                </h3>
                                <div class="it-card-body">
                                    <p class="it-card-text">
                                        Accesso alle procedure informatiche dedicate alla ricerca, consultazione e
                                        gestione delle risorse umane e strumentali della Protezione Civile. La sezione
                                        raccoglie gli strumenti operativi destinati agli utenti autorizzati del sistema
                                        regionale.
                                    </p>
                                </div>
                                <footer class="it-card-related it-card-footer">
                                    <div class="it-card-taxonomy">
                                        <a href="#" class="it-card-category it-card-link"><span class="visually-hidden">Categoria correlata: </span>Gestione
                                            operativa</a>
                                    </div>
                                </footer>
                            </div>
                            <!--card second child is the image (optional)-->
                            <div class="it-card-image-wrapper">
                                <div class="ratio ratio-1x1">
                                    <figure class="figure img-full">
                                        <img src="build/assets/pc-image1.png" alt="Applicativi informatici">
                                    </figure>
                                </div>
                            </div>
                        </article>
                        <article
                            class="it-card it-card-inline it-card-inline-reverse it-card-image rounded shadow-sm border">
                            <div class="it-card-inline-content">
                                <h3 class="it-card-title ">
                                    <a href="#">Monitoraggio</a>
                                </h3>
                                <div class="it-card-body">
                                    <p class="it-card-text">
                                        Sezione dedicata alla segnalazione della percezione sismica. L’accesso è
                                        riservato ai volontari specificamente formati per la compilazione del
                                        questionario, secondo le procedure previste dal servizio.
                                    </p>
                                </div>
                                <footer class="it-card-related it-card-footer">
                                    <div class="it-card-taxonomy">
                                        <a href="#" class="it-card-category it-card-link"><span class="visually-hidden">Categoria correlata: </span>Monitoraggio</a>
                                    </div>
                                </footer>
                            </div>
                            <!--card second child is the image (optional)-->
                            <div class="it-card-image-wrapper">
                                <div class="ratio ratio-1x1">
                                    <figure class="figure img-full">
                                        <img src="https://i.imgur.com/9c1366t.png" alt="Percezione sismica">
                                    </figure>
                                </div>
                            </div>
                        </article>

                    </div>


                </article>
            </div>
        </div>
    </div>
</div>
@endsection
