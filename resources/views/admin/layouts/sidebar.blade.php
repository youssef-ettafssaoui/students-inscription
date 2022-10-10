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
                            <a href="javascript:void(0)"><i class="ik ik-home"></i><span>Categories</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('categorie.create') }}" class="menu-item">Créer</a>
                                <a href="{{ route('categorie.index') }}" class="menu-item">Consulter</a>

                            </div>
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
