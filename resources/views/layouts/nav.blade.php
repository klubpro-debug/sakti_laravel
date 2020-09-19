<header id="header">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <div id="logo">
                <a href="{{ route('awal') }}" class="standard-logo" data-dark-logo="{{ asset('images/logosakti.png') }}"><img
                        src="{{ asset('images/logosakti.png') }}" alt="Sakti Logo"></a>
                <a href="{{ route('awal') }}" class="retina-logo" data-dark-logo="{{ asset('images/logosakti.png') }}"><img
                        src="{{ asset('images/logosakti.png') }}" alt="Sakti Logo"></a>
            </div>
            <nav id="primary-menu">
                <ul>
                    <li class=""><a href="/">
                            <div>Home</div>
                        </a></li>
                    <li class=""><a href="/berita">
                            <div {{ request()->is('berita') ? " style=color:#1abc9c" : '' }}>Berita</div>
                        </a></li>
                    <li class=""><a href="#">
                            <div {{ request()->is(['programming', 'robotik', 'mulmed']) ? " style=color:#1abc9c" : '' }}>Divisi</div>
                        </a>
                        <ul>
                            <li><a href="/programming">
                                    <div>Programming</div>
                                </a></li>
                            <li><a href="/robotik">
                                    <div>Robotik</div>
                                </a></li>
                            <li><a href="/multimedia">
                                    <div>Multimedia</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class=""><a href="/galeri">
                            <div {{ request()->is('galeri') ? " style=color:#1abc9c" : '' }}>Galeri</div>
                        </a></li>
                    <li class=""><a href="/about">
                            <div>About</div>
                        </a>
                    </li>
                    <li class=""><a href="/daftar">
                        <div class="d-flex align-items-center"{{ request()->is('daftar') ? " style=color:#1abc9c" : '' }} style="color: #ffc107;"><i class="fas fa-tasks"></i>Daftar</div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>