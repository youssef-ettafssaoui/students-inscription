<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="{{ url('/dashboard') }}">
                <div class="logo-img">

                </div>
                <span class="text">Inscriptions</span>
            </a>
            <button type="button" class="nav-toggle"><i data-toggle="expanded"
                    class="ik ik-toggle-right toggle-icon"></i></button>
            <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">Navigation</div>
                    <div class="nav-item active">
                        <a href="{{ url('dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                    </div>

                    <div class="nav-item active">
                        <a href="/"><i class="ik ik-home"></i><span>Accueil</span></a>
                    </div>

                    @if (auth()->check() && auth()->user()->role->name === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-settings"></i><span>Paramètres
                                </span>
                                <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('site.setting') }}" class="menu-item">Site</a>
                                <a href="{{ route('seo.setting') }}" class="menu-item">Seo</a>
                            </div>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-database"></i><span>Etablissement</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('etablissement.create') }}" class="menu-item">Créer</a>
                                <a href="{{ route('etablissement.index') }}" class="menu-item">Consulter</a>

                            </div>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-home"></i><span>Categories</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('categorie.create') }}" class="menu-item">Créer</a>
                                <a href="{{ route('categorie.index') }}" class="menu-item">Consulter</a>

                            </div>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-file"></i><span>Publications</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('post.index') }}" class="menu-item">Publications</a>
                                <a href="{{ route('post.create') }}" class="menu-item">Créer</a>
                                <a href="{{ route('post.trash') }}" class="menu-item">Corbeil</a>
                            </div>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'admin')
                        <div class="nav-item">
                            <a href="{{ route('getAllFormations') }}"><i class="ik ik-book"></i><span>Formations</span>
                                <span class="badge badge-danger"></span></a>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'gerant')
                        <div class="nav-item">
                            <a href="{{ route('gerant.view') }}"><i class="ik ik-user"></i><span>Espace Gernat</span>
                                <span class="badge badge-danger"></span></a>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'gerant')
                        <div class="nav-item">
                            <a href="{{ route('formation.create') }}"><i class="ik ik-plus-circle"></i><span>Publier
                                    Formation</span>
                                <span class="badge badge-danger"></span></a>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'gerant')
                        <div class="nav-item">
                            <a href="{{ route('ma.formation') }}"><i class="ik ik-bookmark"></i><span>Mes
                                    Formations</span>
                                <span class="badge badge-danger"></span></a>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'gerant')
                        <div class="nav-item">
                            <a href="{{ route('applicant') }}"><i class="ik ik-users"></i><span>Candidats</span>
                                <span class="badge badge-danger"></span></a>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'etudiant')
                        <div class="nav-item">
                            <a href="{{ route('user.profile') }}"><i class="ik ik-user"></i><span>
                                    Profile</span>
                                <span class="badge badge-danger"></span></a>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'etudiant')
                        <div class="nav-item">
                            <a href="{{ route('saveFormations') }}"><i class="ik ik-save"></i><span>
                                    Formations Enregistrées</span>
                                <span class="badge badge-danger"></span></a>
                        </div>
                    @endif

                    <div class="nav-item active">
                        <a onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                            href="{{ route('logout') }}"><i
                                class="ik ik-power dropdown-icon"></i><span>Logout</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
