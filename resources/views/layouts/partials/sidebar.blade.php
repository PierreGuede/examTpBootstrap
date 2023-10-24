<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="#" class="logo logo-dark">
            {{-- <span class="logo-sm">
                <img src="{{ asset('assets/images/logom.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/maxfence.png') }}" alt="" height="70">
            </span> --}}

        </a>
        <!-- Light Logo-->
        <a href="#" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logom.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/maxfence.png') }}" alt="" height="70">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-home">Dashboard</span></li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('logement.index') ? 'active' : '' }}"
                        href="" role="button" aria-expanded="false">
                        <i data-feather="home" class="icon-dual"></i> <span data-key="t-analytics">Logement</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('sejour.index') ? 'active' : '' }}"
                        href="" role="button" aria-expanded="false">
                        <i data-feather="home" class="icon-dual"></i> <span data-key="t-analytics">Séjour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('voyageur.index') ? 'active' : '' }}"
                        href="" role="button" aria-expanded="false">
                        <i data-feather="home" class="icon-dual"></i> <span data-key="t-analytics">Voyageurs</span>
                    </a>
                </li> <!-- end Dashboard Menu -->


                {{-- <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('familles.index') ? 'active' : '' }}"
                        href=" "  role="button" aria-expanded="false">
                        <i data-feather="layers" class="icon-dual"></i> <span>Famille</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('articles.index') ? 'active' : '' }}"
                        href=" "  role="button" aria-expanded="false">
                        <i data-feather="archive" class="icon-dual"></i> <span data-key="t-analytics">Article</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('depots.index') ? 'active' : '' }}"
                        href=" "  role="button" aria-expanded="false">
                        <i data-feather="archive" class="icon-dual"></i> <span data-key="t-analytics">Dépots</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('affaires.index') ? 'active' : '' }}"
                        href=" "  role="button"
                        aria-expanded="false">
                        <i data-feather="archive" class="icon-dual"></i> <span data-key="t-analytics">Affaires</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('docentetes.index') ? 'active' : '' }}"
                        href=" "  role="button"
                        aria-expanded="false">
                        <i data-feather="archive" class="icon-dual"></i> <span data-key="t-analytics">Documents</span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('tiers.index') ? 'active' : '' }}"
                        href=" "role="button" aria-expanded="false">
                        <i data-feather="archive" class="icon-dual"></i> <span data-key="t-analytics">Tiers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('collaborateurs.index') ? 'active' : '' }}"
                        href=" "role="button"
                        aria-expanded="false">
                        <i data-feather="archive" class="icon-dual"></i> <span
                            data-key="t-analytics">Collaborateurs</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('users.index') ? 'active' : '' }}"
                        href=" "role="button" aria-expanded="false">
                        <i data-feather="archive" class="icon-dual"></i> <span
                            data-key="t-analytics">Utilisateurs</span>
                    </a>
                </li> --}}






            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
