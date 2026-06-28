<header class="it-header-wrapper" data-bs-target="#header-nav-wrapper" style="">

    <div class="it-header-slim-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                        <a class="d-lg-block navbar-brand" href="{{ url('/admin/dashboard') }}"
                           aria-label="Vai al portale Protezione Civile Veneto"
                           title="Vai al portale Protezione Civile Veneto">Regione del Veneto - Protezione Civile</a>
                        <div class="it-header-slim-right-zone" role="navigation">
                            <div class="nav-item dropdown">
                                <button type="button" class="btn rounded-icon dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                      <svg class="icon icon-sm icon-white align-top">
                                        <use xlink:href="/bootstrap-italia/dist/svg/sprites.svg#it-user"></use>
                                      </svg>

                                </button>

                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="link-list-wrapper">
                                                <ul class="link-list">
                                                    <li>
                                                        <a class="dropdown-item list-item" href="{{ url('/admin/profile') }}">
                                                            <span>Profilo</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item list-item" href="#">
                                                            <span>LogOut</span>
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


</header>
