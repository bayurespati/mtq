<header id="header" class="" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 53, 'stickySetTop': '-53px'}">
    <div class="header-body border-top-0 h-auto box-shadow-none">
        <div class="header-top header-top-borders">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item py-2 d-none d-sm-inline-flex pe-2">
                                        <span class="ps-0 font-weight-semibold text-color-default text-2-5">Kota Samarinda</span>
                                    </li>
                                    <li class="nav-item py-2 pe-2">
                                        <a href="tel:0541-733-333" class="text-color-default text-2-5 text-color-hover-primary font-weight-semibold">0541-733-333</a>
                                    </li>
                                    <li class="nav-item py-2 d-none d-md-inline-flex">
                                        <a href="mailto:diskominfo@kaltimprov.go.id" class="text-color-default text-2-5 text-color-hover-primary font-weight-semibold">diskominfo@kaltimprov.go.id</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills p-relative bottom-2">
                                    <li class="nav-item py-2 d-none d-lg-inline-flex">
                                        <a href="https://www.facebook.com/kominfokaltim/?locale=id_ID" target="_blank" title="Facebook" class="text-color-dark text-color-hover-primary text-3 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-facebook-f text-3 p-relative top-1"></i></a>
                                    </li>
                                    <li class="nav-item py-2 d-none d-lg-inline-flex">
                                        <a href="https://www.instagram.com/diskominfokaltim/" target="_blank" title="Instagran" class="text-color-dark text-color-hover-primary text-3 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-instagram text-3 p-relative top-1"></i></a>
                                    </li>
                                    <li class="nav-item py-2 d-none d-lg-inline-flex">
                                        <a href="https://www.youtube.com/@kominfokaltim6630" target="_blank" title="Youtube" class="text-color-dark text-color-hover-primary text-3 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-youtube text-3 p-relative top-1"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container header-container-height-sm container p-static">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('beranda') }}">
                                <img alt="Home" width="80" height="100%" src="/img/Logo MTQ XXX.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-border-radius header-nav-main-text-capitalize header-nav-main-text-size-4 header-nav-main-arrows header-nav-main-full-width-mega-menu header-nav-main-mega-menu-bg-hover header-nav-main-effect-2">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a href="{{ route('beranda') }}" class="{{ request()->is('/') ? 'nav-link active' : 'nav-link' }}">
                                                Beranda
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="{{ request()->is('profil/*') ? 'dropdown-item dropdown-toggle active' : 'dropdown-item dropdown-toggle' }}">
                                                Profil
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route('tentang-kami') }}" class="{{ request()->is('/profil/tentang-kami') ? 'dropdown-item active' : 'dropdown-item' }}">Tentang Kami</a>
                                                </li>
                                                <!-- <li>
                                                    <a href="{{ route('sambutan') }}" class="{{ request()->is('/profil/sambutan') ? 'dropdown-item active' : 'dropdown-item' }}">Sambutan</a>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="{{ request()->is('artikel/*') ? 'dropdown-item dropdown-toggle active' : 'dropdown-item dropdown-toggle' }}">
                                                Artikel
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route('berita') }}" class="{{ request()->is('/artikel/berita') ? 'dropdown-item active' : 'dropdown-item' }}">Berita</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pengumuman') }}" class="{{ request()->is('/artikel/pengumuman') ? 'dropdown-item active' : 'dropdown-item' }}">Pengumuman</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="{{ request()->is('media/*') ? 'dropdown-item dropdown-toggle active' : 'dropdown-item dropdown-toggle' }}">
                                                Media
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route('foto') }}" class="{{ request()->is('/media/foto') ? 'dropdown-item active' : 'dropdown-item' }}">Foto</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('video') }}" class="{{ request()->is('/media/video') ? 'dropdown-item active' : 'dropdown-item' }}">Video</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('livestream') }}" class="{{ request()->is('/media/livestream') ? 'dropdown-item active' : 'dropdown-item' }}">Livestream</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('musabaqadah-center') }}" class="{{ request()->is('musabaqadah-center') ? 'nav-link active' : 'nav-link' }}">
                                                Musabaqadah Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('hubungi-kami') }}" class="{{ request()->is('hubungi-kami') ? 'nav-link active' : 'nav-link' }}">
                                                Hubungi Kami
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            @if(Auth::user())
                            <a href="/admin-view" class="{{ request()->is('login') ? 'btn btn-modern btn-primary btn-outline btn-arrow-effect-1 text-capitalize text-2-5 ms-3 me-2 d-block d-md-none d-xl-block anim-hover-translate-right-5px transition-2ms active' : 'btn btn-modern btn-primary btn-outline btn-arrow-effect-1 text-capitalize text-2-5 ms-3 me-2 d-block d-md-none d-xl-block anim-hover-translate-right-5px transition-2ms' }}">
                                E-MTQ
                            </a>
                            @else
                            <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'btn btn-modern btn-primary btn-outline btn-arrow-effect-1 text-capitalize text-2-5 ms-3 me-2 d-block d-md-none d-xl-block anim-hover-translate-right-5px transition-2ms active' : 'btn btn-modern btn-primary btn-outline btn-arrow-effect-1 text-capitalize text-2-5 ms-3 me-2 d-block d-md-none d-xl-block anim-hover-translate-right-5px transition-2ms' }}">
                                E-MTQ
                            </a>
                            @endif
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>