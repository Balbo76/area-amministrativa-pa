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
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="rounded-icon" aria-hidden="true">
                                      <svg class="icon icon-sm icon-white align-top">
                                        <use xlink:href="/bootstrap-italia/dist/svg/sprites.svg#it-user"></use>
                                      </svg>
                                    </span>
                                    Accedi
                                </button>

                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="link-list-wrapper">
                                                <ul class="link-list">
                                                    <li>
                                                        <a class="dropdown-item list-item" href="{{ url('/login') }}">
                                                            <span>Applicativi</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item list-item" href="#">
                                                            <span>Percezione Sismica</span>
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
                                <a href="{{ url('/') }}" data-focus-mouse="false">
                                    <img src="/build/assets/logo-PC-Veneto.png" alt="" class="icon icon-xl">
                                    <div class="it-brand-text">
                                        <h2 class="it-brand-title">Protezione Civile Veneto</h2>
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
