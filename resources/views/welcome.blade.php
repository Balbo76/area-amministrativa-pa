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

        <div class="it-hero-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-inline-flex">
                            <div class="icon">
                                <img src="build/assets/logo_protezione_civile_italiana.png">
                            </div>
                            <div class="it-hero-text-wrapper bg-dark">
                                <span class="it-category">Regione del Veneto · Protezione Civile</span>
                                <h1>Portale di supporto alle attività di Protezione Civile</h1>
                                <p>
                                    Benvenuti nel portale di supporto delle attività di protezione civile della Regione del Veneto.
                                    Il portale mette a disposizione strumenti e accessi operativi per gli operatori del Sistema
                                    Regionale di Protezione Civile, con un’interfaccia più chiara, ordinata e fruibile su ogni dispositivo.
                                </p>
                                <small>
                                    I dati presentati nel portale non sostituiscono i dati cartografici ufficiali né i dati presenti
                                    nei piani comunali approvati. Le informazioni disponibili costituiscono uno strumento di supporto
                                    per gli Enti del sistema regionale di Protezione Civile.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-10 mb-3 mb-md-4">
                    <!--start it-card-->
                    <article class="it-card it-card-inline it-card-image rounded shadow-sm border">
                        <!--card first child is all the card content: title (link) + body + footer -->
                        <div class="it-card-inline-content">
                            <h3 class="it-card-title ">
                                <a href="#">Titolo contenuto editoriale</a>
                            </h3>
                            <div class="it-card-body">
                                <p class="it-card-text">Questo è un testo breve che riassume il contenuto della pagina di destinazione in massimo tre o quattro righe, senza troncamento.</p>
                            </div>
                            <footer class="it-card-related it-card-footer">
                                <div class="it-card-taxonomy">
                                    <a href="#" class="it-card-category it-card-link"><span class="visually-hidden">Categoria correlata: </span>Categoria</a>
                                </div>
                                <time class="it-card-date" datetime="2026-04-22">22 aprile 2026</time>
                            </footer>
                        </div>
                        <!--card second child is the image (optional)-->
                        <div class="it-card-image-wrapper">
                            <div class="ratio ratio-1x1">
                                <figure class="figure img-full">
                                    <img src="https://picsum.photos/seed/city/800/600" alt="Breve descrizione immagine se ha senso nel contesto, marcare altrimenti come decorativa lasciando l'alt applicato ma vuoto.">
                                </figure>
                            </div>
                        </div>
                    </article>
                    <!--end it-card-->
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-10 mb-3 mb-md-4">
                    <!--start it-card-->
                    <article class="it-card it-card-inline it-card-inline-reverse it-card-image rounded shadow-sm border">
                        <!--card first child is all the card content: title (link) + body + footer -->
                        <div class="it-card-inline-content">
                            <h3 class="it-card-title ">
                                <a href="#">Titolo contenuto editoriale</a>
                            </h3>
                            <div class="it-card-body">
                                <p class="it-card-text">Questo è un testo breve che riassume il contenuto della pagina di destinazione in massimo tre o quattro righe, senza troncamento.</p>
                            </div>
                            <footer class="it-card-related it-card-footer">
                                <div class="it-card-taxonomy">
                                    <a href="#" class="it-card-category it-card-link"><span class="visually-hidden">Categoria correlata: </span>Categoria</a>
                                </div>
                                <time class="it-card-date" datetime="2026-04-22">22 aprile 2026</time>
                            </footer>
                        </div>
                        <!--card second child is the image (optional)-->
                        <div class="it-card-image-wrapper">
                            <div class="ratio ratio-1x1">
                                <figure class="figure img-full">
                                    <img src="https://picsum.photos/seed/nature/800/600" alt="Breve descrizione immagine se ha senso nel contesto, marcare altrimenti come decorativa lasciando l'alt applicato ma vuoto.">
                                </figure>
                            </div>
                        </div>
                    </article>
                    <!--end it-card-->
                </div>
            </div>
        </div>


        <h1>Servizi e applicativi</h1>



        <div class="it-hero-wrapper it-primary it-overlay">
            <!-- - img-->
            <div class="img-responsive-wrapper">
                <div class="img-responsive">
                    <div class="img-wrapper">
                        <img src="https://i.imgur.com/pZBjfau.png" title="Applicativi informatici" alt="Applicativi informatici">
                    </div>
                </div>
            </div>
            <!-- - texts-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-hero-text-wrapper bg-dark">
                            <span class="it-category">Gestione operativa</span>
                            <h1>Applicativi informatici</h1>
                            <p class="d-none d-lg-block">
                                Accesso alle procedure informatiche dedicate alla ricerca, consultazione e gestione
                                delle risorse umane e strumentali della Protezione Civile. La sezione raccoglie
                                gli strumenti operativi destinati agli utenti autorizzati del sistema regionale.
                            </p>
                            <div class="it-btn-container">
                                <a class="btn btn-sm btn-outline-primary" href="https://gestionale.supportopcveneto.it/index.php">Accedi agli applicativi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>












        <main class="services">
            <div class="container">
                <div class="section-head">
                    <div class="eyebrow">Accessi disponibili</div>
                    <h2>Servizi e applicativi</h2>
                </div>

                <div class="cards">

                    <article class="card">
                        <div class="card-media">
                            <img src="https://i.imgur.com/pZBjfau.png" alt="Applicativi informatici">
                        </div>
                        <div class="card-body">
                            <div class="card-tag">Gestione operativa</div>
                            <h3>Applicativi informatici</h3>
                            <p>
                                Accesso alle procedure informatiche dedicate alla ricerca, consultazione e gestione
                                delle risorse umane e strumentali della Protezione Civile. La sezione raccoglie
                                gli strumenti operativi destinati agli utenti autorizzati del sistema regionale.
                            </p>
                            <div class="actions">
                                <a class="button button-primary" href="https://gestionale.supportopcveneto.it/index.php">
                                    Accedi agli applicativi
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="card">
                        <div class="card-media">
                            <img src="https://i.imgur.com/9c1366t.png" alt="Percezione sismica">
                        </div>
                        <div class="card-body">
                            <div class="card-tag">Monitoraggio</div>
                            <h3>Percezione sismica</h3>
                            <p>
                                Sezione dedicata alla segnalazione della percezione sismica. L’accesso è riservato
                                ai volontari specificamente formati per la compilazione del questionario,
                                secondo le procedure previste dal servizio.
                            </p>
                            <div class="actions">
                                <a class="button button-primary" href="https://gestionale.supportopcveneto.it/percezione_sismica/login.php">
                                    Accedi alla sezione
                                </a>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </main>








        @include('layouts.footer')

    </body>
</html>
