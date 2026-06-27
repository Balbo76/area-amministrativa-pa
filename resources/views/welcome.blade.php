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
        <div class="it-hero-wrapper it-text-centered it-filter it-overlay mt-1 it-bottom-overlapping-content">
            <div class="img-responsive-wrapper">
                <div class="img-responsive">
                    <div class="img-wrapper">
                        <img src="https://i.imgur.com/pZBjfau.png" title="Applicativi informatici" alt="Applicativi informatici">
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
                <div class="col-12 col-md-12 col-lg-12 col-xl-10 mb-3 mb-md-4">
                        <div class="it-card rounded shadow border px-5 py-4">
                            <div class="container-fluid p-4">
                                <h2 class="text-center">Servizi e applicativi</h2>
                            </div>
                            <article class="it-card it-card-inline it-card-image rounded shadow-sm border mb-5">
                                <div class="it-card-inline-content">
                                    <h3 class="it-card-title ">
                                        <a href="#">Applicativi informatici</a>
                                    </h3>
                                    <div class="it-card-body">
                                        <p class="it-card-text">
                                            Accesso alle procedure informatiche dedicate alla ricerca, consultazione e gestione delle risorse umane e strumentali della Protezione Civile. La sezione raccoglie gli strumenti operativi destinati agli utenti autorizzati del sistema regionale.
                                        </p>
                                    </div>
                                    <footer class="it-card-related it-card-footer">
                                        <div class="it-card-taxonomy">
                                            <a href="#" class="it-card-category it-card-link"><span class="visually-hidden">Categoria correlata: </span>Gestione operativa</a>
                                        </div>
                                    </footer>
                                </div>
                                <!--card second child is the image (optional)-->
                                <div class="it-card-image-wrapper">
                                    <div class="ratio ratio-1x1">
                                        <figure class="figure img-full">
                                            <img src="https://i.imgur.com/pZBjfau.png" alt="Applicativi informatici">
                                        </figure>
                                    </div>
                                </div>
                            </article>
                            <article class="it-card it-card-inline it-card-inline-reverse it-card-image rounded shadow-sm border mb-5">
                                <div class="it-card-inline-content">
                                    <h3 class="it-card-title ">
                                        <a href="#">Monitoraggio</a>
                                    </h3>
                                    <div class="it-card-body">
                                        <p class="it-card-text">
                                            Sezione dedicata alla segnalazione della percezione sismica. L’accesso è riservato ai volontari specificamente formati per la compilazione del questionario, secondo le procedure previste dal servizio.
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
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>
