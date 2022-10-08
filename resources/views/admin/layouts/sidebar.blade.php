<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="{{ url('/dashboard') }}">
                <div class="logo-img">

                </div>
                <span class="text">Hôpital</span>
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
                            <a href="javascript:void(0)"><i class="ik ik-home"></i><span>Département</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('department.create') }}" class="menu-item">Créer</a>
                                <a href="{{ route('department.index') }}" class="menu-item">Consulter</a>

                            </div>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-users"></i><span>Médecin</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('doctor.create') }}" class="menu-item">Créer</a>
                                <a href="{{ route('doctor.index') }}" class="menu-item">View</a>

                            </div>
                        </div>
                    @endif
                    @if (auth()->check() && auth()->user()->role->name === 'doctor')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Horraire des
                                    rendez-vous</span> <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('appointment.create') }}" class="menu-item">Créer</a>
                                <a href="{{ route('appointment.index') }}" class="menu-item">Vérifier</a>

                            </div>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'doctor')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Patients</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('patients.today') }}" class="menu-item">Patients(du Jour)</a>
                                <a href="{{ route('prescribed.patients') }}" class="menu-item">Patients(Ordonnance)</a>

                            </div>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-bell"></i><span>Rendez-vous
                                    Patients</span>
                                <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('patient') }}" class="menu-item">Today Appointment</a>
                                <a href="{{ route('all.appointments') }}" class="menu-item">All Time Appointment</a>

                            </div>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-folder"></i><span>Factures
                                </span>
                                <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('facture.index') }}" class="menu-item">Consulter</a>
                                <a href="{{ route('facture.create') }}" class="menu-item">Créer Facture</a>

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
