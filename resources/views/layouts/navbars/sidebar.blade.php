<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link{{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Beranda') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="{{ request()->is(['list_berita', 'list_berita/create' , 'kategori']) ? 'true' : 'false' }}" aria-controls="navbar-examples">
                        <i class="far fa-newspaper" style="color: #00c0ef;"></i>
                        <span class="nav-link-text">{{ __('Berita') }}</span>
                    </a>
                    <div class="collapse{{ request()->is(['list_berita', 'list_berita/create', 'kategori']) ? ' show' : '' }}" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link{{ request()->is('list_berita') ? ' active' : '' }}" href="{{ route('list_berita.index') }}">
                                    {{ __('List Berita') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link{{ request()->is('list_berita/create') ? ' active' : '' }}" href="{{ route('list_berita.create') }}">
                                    {{ __('Tambah Berita') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link{{ request()->is('kategori') ? ' active' : '' }}" href="{{ route('kategori.index') }}">
                                    {{ __('Kategori') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples1" data-toggle="collapse" role="button" aria-expanded="{{ request()->is(['profile', 'user']) ? 'true' : 'false' }}" aria-controls="navbar-examples1">
                        <i class="fas fa-users" style="color: #CCCC00;"></i>
                        <span class="nav-link-text">{{ __('Pengguna') }}</span>
                    </a>
                    <div class="collapse{{ request()->is(['profile', 'user']) ? ' show' : '' }}" id="navbar-examples1">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link{{ request()->is('profile') ? ' active' : '' }}" href="{{ route('profile.edit') }}">
                                    {{ __('Profil Pengguna') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link{{ request()->is('user') ? ' active' : '' }}" href="{{ route('user.index') }}">
                                    {{ __('Manajemen Pengguna') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pendaftaran.index') }}">
                        <i class="fas fa-tasks text-gray"></i> {{ __('Pendaftaran') }}
                    </a>
                </li>                   
                <li class="nav-item">
                    <a class="nav-link{{ request()->is('list_galeri') ? ' active' : '' }}" href="{{ route('list_galeri.index') }}">
                        <i class="far fa-images text-orange"></i> {{ __('Galeri') }}
                    </a>
                </li>   
                <li class="nav-item mb-5 bg-danger" style="position: absolute; bottom: 0;">
                    <a class="nav-link text-white" href="{{ route('logout') }}" target="_blank">
                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>