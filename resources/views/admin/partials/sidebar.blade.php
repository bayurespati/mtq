<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            <!-- Navigation -->
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                @if(auth()->user()->role_id != 3)
                <ul class="nav nav-main">
                    <li class="d-flex justify-content-center align-items-center">
                        <img src="/img/Logo MTQ White.png" width="180" height="100%" class="img-fluid mb-4" alt="logo" />
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <!-- <i class="bx bx-cart-alt" aria-hidden="true"></i> -->
                            <span>Perlombaan</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('admin-page') }}">
                                    Jadwal Peserta
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('tema-mtq') }}">
                                    Tema MTQ
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('hasil-individu') }}">
                                    Hasil Individu / Utusan
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <!-- <i class="bx bx-cart-alt" aria-hidden="true"></i> -->
                            <span>Informasi</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('lokasi-perlombaan') }}">
                                    Lokasi Perlombaan
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('lokasi-bazaar') }}">
                                    Lokasi Bazaar
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('lokasi-pemondokan') }}">
                                    Lokasi Pemondokan
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <!-- <i class="bx bx-cart-alt" aria-hidden="true"></i> -->
                            <span>Kepanitiaan</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('official-kafilah') }}">
                                    Official Kafilah
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('dewan-majelis') }}">
                                    Dewan / Majelis Hakim
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('panitia-mtq') }}">
                                    Panitia MTQ
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <span>Artikel</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('admin-berita-index') }}">
                                    Berita
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin-pengumuman-index') }}">
                                    Pengumuman
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <span>Media</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('admin-foto-index') }}">
                                    Foto
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin-video-index') }}">
                                    Video
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin-livestream-index') }}">
                                    Livestream 
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <span>Master Data</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('admin-jadwal-index') }}">
                                    Jadwal
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin-lomba-index') }}">
                                    Lomba
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin-skpd-index') }}">
                                    SKPD
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin-lo-index') }}">
                                    LO
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin-provinsi-index') }}">
                                    Provinsi
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin-peserta-index') }}">
                                    Peserta
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin-sopir-index') }}">
                                    Sopir
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('admin-mobil-index') }}">
                                    Mobil
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('admin-faq-index') }}">
                            <span>FAQ</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('admin-pesan-index') }}">
                            <span>Pesan</span>
                        </a>
                    </li>
                </ul>
                @else
                <ul class="nav nav-main">
                    <li class="d-flex justify-content-center align-items-center">
                        <a href="/">
                            <img src="/img/Logo MTQ White.png" width="180" height="100%" class="img-fluid mb-4" alt="logo" />
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <span>Profil</span>
                        </a>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <!-- <i class="bx bx-cart-alt" aria-hidden="true"></i> -->
                            <span>Pusat Informasi</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('admin-page') }}">
                                    Hotel
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('tema-mtq') }}">
                                    Mobil
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('hasil-individu') }}">
                                    Supir
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>

    </div>

</aside>