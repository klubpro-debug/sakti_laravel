<header id="header" class="transparent-header full-header dark" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <div id="logo">
                <a href="index.html" class="standard-logo" data-dark-logo="{{ asset('') }}images/logosakti.png"><img
                        src="{{ asset('') }}images/logosakti.png" alt="Sakti Logo"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="{{ asset('') }}images/logosakti.png"><img
                        src="{{ asset('') }}images/logosakti.png" alt="Sakti Logo"></a>
            </div>
            <nav id="primary-menu" class="not-dark">
                <ul>
                    <li class="current"><a href="/">
                            <div {{ request()->is('/') ? " style=color:#1abc9c" : '' }}>Home</div>
                        </a></li>
                    <li class="current"><a href="/berita">
                            <div>Berita</div>
                        </a></li>
                    <li class="current"><a href="#">
                            <div>Divisi</div>
                        </a>
                        <ul>
                            <li><a href="/divisi/programming">
                                    <div>Programming</div>
                                </a></li>
                            <li><a href="/divisi/robotik">
                                    <div>Robotik</div>
                                </a></li>
                            <li><a href="/divisi/multimedia">
                                    <div>Multimedia</div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="current"><a href="/galeri">
                            <div>Galeri</div>
                        </a></li>
                    <li class="current"><a href="/about">
                            <div {{ request()->is('about') ? " style=color:#1abc9c" : '' }}>About</div>
                        </a></li>
                    <li class="current"><a href="/daftar">
                            <div class="d-flex align-items-center" style="color: #ffc107;"><i class="fas fa-tasks"></i>Daftar</div>
                        </a></li>
                </ul>              
            </nav>
        </div>
    </div>
</header>