<header class="it-header-wrapper" data-bs-target="#header-nav-wrapper" style="">

    <div class="it-header-slim-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                        <a class="d-lg-block navbar-brand" href="{{ url('/') }}"
                           aria-label="Vai al portale Protezione Civile Veneto"
                           title="Vai al portale Protezione Civile Veneto">Regione del Veneto - Protezione Civile</a>
                        <div class="it-header-slim-right-zone" role="navigation">
                            <div class="nav-item dropdown">
                                <button type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false" aria-controls="languages" aria-haspopup="true">
                                    <span class="visually-hidden">Lingua attiva:</span>
                                    <span>ITA</span>
                                    <svg class="icon icon-sm icon-white align-top">
                                        <use xlink:href="/bootstrap-italia/dist/svg/sprites.svg#it-expand"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="link-list-wrapper">
                                                <ul class="link-list">
                                                    <li><a class="dropdown-item list-item" href="#"><span>ITA <span
                                                                    class="visually-hidden">selezionata</span></span></a>
                                                    </li>
                                                    <li><a class="dropdown-item list-item" href="#"><span>ENG</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-icon btn-full" href="{{ route('login') }}"
                               data-element="personal-area-login">
                            <span class="rounded-icon" aria-hidden="true">
                              <svg class="icon icon-primary">
                                <use xlink:href="/bootstrap-italia/dist/svg/sprites.svg#it-user"></use>
                              </svg>
                            </span>
                                <span class="d-none d-lg-block">Accedi all'area personale</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="it-nav-wrapper">
        <div class="it-header-center-wrapper ">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-12">
                        <div class="it-header-center-content-wrapper">
                            <div class="it-brand-wrapper">
                                <a href="/">
                                    <img src="/build/assets/logo_protezione_civile_italiana.png" alt="" class="icon icon-xs">
                                    <img src="/build/assets/logo_regione_del_veneto.png" alt="" class="icon icon-xs">
                                    <img src="/build/assets/logo-PC-Veneto.png" alt="" class="icon icon-xs">
                                    <div class="it-brand-text">
                                        <div class="it-brand-title">Protezione Civile Veneto</div>
                                    </div>
                                </a>
                            </div>
                            <div class="it-right-zone">
                                <div class="it-socials d-none d-md-flex"><span>Seguici su</span>
                                    <ul>
                                        <li>
                                            <a class="p-2 text-white" target="_blank" href="{{ url('https://twitter.com/PC_Veneto') }}">
                                                <svg class="icon icon-sm icon-white align-top">
                                                    <use xlink:href="/bootstrap-italia/dist/svg/sprites.svg#it-twitter"></use>
                                                </svg>
                                                <span class="visually-hidden">X (link esterno)</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="p-2 text-white" target="_blank" href="{{ url('https://www.facebook.com/ProtezioneCivileRegioneDelVeneto') }}">
                                                <svg class="icon icon-sm icon-white align-top">
                                                    <use xlink:href="/bootstrap-italia/dist/svg/sprites.svg#it-facebook"></use>
                                                </svg>
                                                <span class="visually-hidden">Facebook (link esterno)</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="p-2 text-white" target="_blank" href="{{ url('https://www.instagram.com/protezionecivileregioneveneto/') }}">
                                                <svg class="icon icon-sm icon-white align-top">
                                                    <use xlink:href="/bootstrap-italia/dist/svg/sprites.svg#it-instagram"></use>
                                                </svg>
                                                <span class="visually-hidden">Instagram (link esterno)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>
