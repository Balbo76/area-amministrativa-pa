@extends('private.layout.admin-layout')
@section('title', 'Icone Protezione Civile')
@section('page-title', 'Icone Protezione Civile')

@section('content')
    <div class="container my-5">

        <!-- TESTATA DELLA PAGINA DI DEMO -->
        <div class="row mb-5">
            <div class="col-12 border-bottom pb-3">
                <h1 class="text-primary">Libreria Icone Istituzionali</h1>
                <p class="lead">Demo completa dei componenti <code>&lt;x-pc-icon&gt;</code> integrati con il design
                    system di Bootstrap Italia.</p>
            </div>
        </div>

        <!-- 1. SEZIONE BANNER DI EMERGENZA (Esempio Allerta Attiva) -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-secondary">1. Banner di Allerta & Utility Urgenti</h3>

                <div class="alert alert-danger d-flex align-items-center mb-3" role="alert">
                    <x-pc-icon name="allerta-attiva" size="icon-lg" class="me-3 text-white"/>
                    <div>
                        <strong>Stato di Allerta Attiva:</strong> È in corso un evento meteo critico. Consulta le norme
                        di comportamento.
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-primary btn-icon">
                        <x-pc-icon name="diventa-volontario" size="icon-sm" class="text-white"/>
                        <span>Diventa Volontario</span>
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-icon">
                        <x-pc-icon name="norme-comportamento" size="icon-sm"/>
                        <span>Campagna Io Non Rischio</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- 2. SEZIONE RISCHI AMBIENTALI (Esempio Tabella o Griglia di Allertamento) -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-secondary">2. Rischi Ambientali (Colori Allerta Meteo)</h3>
                <p class="text-muted">Esempio di utilizzo delle icone di rischio combinate con i colori di criticità del
                    Centro Funzionale Decentrato Veneto.</p>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                        <tr class="bg-light">
                            <th scope="col" style="width: 25%">Tipologia Rischio</th>
                            <th scope="col" style="width: 15%">Icona Codificata</th>
                            <th scope="col">Esempio di Stato / Badge UI (Bootstrap Italia)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Idrogeologico - Allerta Verde -->
                        <tr>
                            <td><strong>Rischio Idrogeologico</strong></td>
                            <td class="text-center">
                                <x-pc-icon name="rischio-idrogeologico" size="icon-md"/>
                            </td>
                            <td>
                                <span class="badge text-white" style="background-color: var(--alert-green);">CRITICITÀ ASSENTE (VERDE)</span>
                            </td>
                        </tr>
                        <!-- Meteo/Temporali - Allerta Gialla -->
                        <tr>
                            <td><strong>Rischio Meteo / Vento</strong></td>
                            <td class="text-center">
                                <x-pc-icon name="rischio-meteo" size="icon-md"/>
                            </td>
                            <td>
                                <span class="badge text-dark" style="background-color: var(--alert-yellow);">CRITICITÀ ORDINARIA (GIALLO)</span>
                            </td>
                        </tr>
                        <!-- Sismico -->
                        <tr>
                            <td><strong>Rischio Sismico</strong></td>
                            <td class="text-center">
                                <x-pc-icon name="rischio-sismico" size="icon-md"/>
                            </td>
                            <td>
                                <span class="badge bg-secondary text-white">MONITORAGGIO ORDINARIO</span>
                            </td>
                        </tr>
                        <!-- Incendi - Allerta Arancione -->
                        <tr>
                            <td><strong>Incendi Boschivi</strong></td>
                            <td class="text-center">
                                <x-pc-icon name="rischio-incendi" size="icon-md"/>
                            </td>
                            <td>
                                <span class="badge text-dark" style="background-color: var(--alert-orange);">GRAVE PERICOLOSITÀ (ARANCIONE)</span>
                            </td>
                        </tr>
                        <!-- Neve/Valanghe - Allerta Rossa -->
                        <tr>
                            <td><strong>Rischio Neve e Ghiaccio</strong></td>
                            <td class="text-center">
                                <x-pc-icon name="rischio-neve" size="icon-md"/>
                            </td>
                            <td>
                                <span class="badge text-white" style="background-color: var(--alert-red);">CRITICITÀ ELEVATA (ROSSO)</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 3. SEZIONE PIANIFICAZIONE E CENTRI DI COMANDO (Card Teaser) -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-secondary">3. Aree di Emergenza e Logistica (Piani Comunali)</h3>
            </div>

            <!-- Card Area di Attesa -->
            <div class="col-md-4 mb-3">
                <div class="card card-space shadow-sm border-start border-primary border-4">
                    <div class="card-body d-flex align-items-start">
                        <div class="me-3">
                            <x-pc-icon name="area-attesa" size="icon-xl" style="color: var(--pc-blue);"/>
                        </div>
                        <div>
                            <h5 class="card-title text-primary">Aree di Attesa</h5>
                            <p class="card-text small text-muted">Punti di primo ritrovo per la popolazione in caso di
                                evacuazione di emergenza.</p>
                            <a href="#" class="btn btn-link btn-sm p-0">Vedi mappa</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Area di Ricovero -->
            <div class="col-md-4 mb-3">
                <div class="card card-space shadow-sm border-start border-warning border-4">
                    <div class="card-body d-flex align-items-start">
                        <div class="me-3">
                            <x-pc-icon name="area-ricovero" size="icon-xl" style="color: var(--pc-orange);"/>
                        </div>
                        <div>
                            <h5 class="card-title text-primary">Aree di Ricovero</h5>
                            <p class="card-text small text-muted">Aree per l'allestimento di tendopoli, strutture
                                ricettive o campi di accoglienza sfollati.</p>
                            <a href="#" class="btn btn-link btn-sm p-0">Elenco strutture</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Ammassamento Soccorritori -->
            <div class="col-md-4 mb-3">
                <div class="card card-space shadow-sm border-start border-secondary border-4">
                    <div class="card-body d-flex align-items-start">
                        <div class="me-3">
                            <x-pc-icon name="area-ammassamento" size="icon-xl" class="text-secondary"/>
                        </div>
                        <div>
                            <h5 class="card-title text-primary">Ammassamento</h5>
                            <p class="card-text small text-muted">Hub logistici riservati all'arrivo dei soccorritori e
                                delle colonne mobili d'aiuto.</p>
                            <a href="#" class="btn btn-link btn-sm p-0">Specifiche hub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. SEZIONE CENTRI OPERATIVI E SEDI -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-secondary">4. Centri Coordinamento Operativo</h3>
            </div>

            <div class="col-md-6 mb-3">
                <div class="p-3 border rounded bg-light d-flex align-items-center">
                    <x-pc-icon name="coc" size="icon-lg" style="color: var(--pc-blue);" class="me-3"/>
                    <div>
                        <h5 class="mb-1">C.O.C. attivi sul territorio</h5>
                        <p class="mb-0 text-muted small">Contatti e sedi dei Centri Operativi Comunali attivati dai
                            Sindaci.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="p-3 border rounded bg-light d-flex align-items-center">
                    <x-pc-icon name="sede-volontari" size="icon-lg" style="color: var(--pc-blue);" class="me-3"/>
                    <div>
                        <h5 class="mb-1">Sedi Associazioni e Gruppi</h5>
                        <p class="mb-0 text-muted small">Mappa dei distretti, dei magazzini e delle sedi dei volontari
                            tute gialle.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. TABELLA DI CONFRONTO SCALABILITÀ DELLE DIMENSIONI (BOOTSTRAP ITALIA) -->
        <div class="row">
            <div class="col-12">
                <h3 class="mb-3 text-secondary">5. Tabella Scalabilità Taglie (Classi Bootstrap Italia)</h3>
                <div class="p-4 border rounded text-center bg-white d-flex justify-content-around align-items-center">
                    <div>
                        <x-pc-icon name="area-attesa" size="icon-xs" class="text-primary"/>
                        <div class="small text-muted mt-1">icon-xs</div>
                    </div>
                    <div>
                        <x-pc-icon name="area-attesa" size="icon-sm" class="text-primary"/>
                        <div class="small text-muted mt-1">icon-sm</div>
                    </div>
                    <div>
@endsection
