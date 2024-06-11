<footer id="footer" class="position-relative bg-dark border-top-0 m-0">
    <div class="container pt-4 pb-3">
        <div class="row pt-2">
            <div class="col-lg-6">
                <a href="{{ route('beranda') }}" class="text-decoration-none">
                    <img src="/img/Logo MTQ White.png" width="180" height="100%" class="img-fluid mb-4" alt="logo" />
                </a>
                <p class="text-3-5 font-weight-medium pe-lg-2">Kompleks Ibu Kota Nusantara (IKN) dan Samarinda</p>
                <ul class="list list-unstyled">
                    <li class="d-flex align-items-center mb-4">
                        <i class="icon icon-phone text-color-light text-5 font-weight-bold position-relative top-1 me-3-5"></i>
                        <a href="tel:0541-733-333" class="d-inline-flex align-items-center text-decoration-none text-color-light text-color-hover-primary font-weight-semibold text-4-5">0541-733-333</a>
                    </li>
                    <li class="d-flex align-items-center mb-4">
                        <i class="icon icon-envelope text-color-light text-5 font-weight-bold position-relative top-1 me-3-5"></i>
                        <a href="mailto:biroadpim@kaltimprov.go.id" class="d-inline-flex align-items-center text-decoration-none text-color-light text-color-hover-primary font-weight-semibold text-4-5">biroadpim@kaltimprov.go.id</a>
                    </li>
                </ul>
                <ul class="social-icons social-icons-clean social-icons-medium">
                    <li class="social-icons-facebook">
                        <a href="https://www.facebook.com/LPTQKabupatenBengkalis/?locale=id_ID" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f text-color-light"></i>
                        </a>
                    </li>
                    <li class="social-icons-twitter">
                        <a href="https://x.com/lptqbengkalis" target="_blank" title="Twitter">
                            <i class="fab fa-x-twitter text-color-light"></i>
                        </a>
                    </li>
                    <li class="social-icons-youtube">
                        <a href="https://www.youtube.com/watch?v=dQasNuUy-dE&ab_channel=terubuktelevisi" target="_blank" title="Youtube">
                            <i class="fab fa-youtube text-color-light"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4">
                <div class="row mb-5-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h4 class="text-color-light font-weight-bold mb-3">Navigasi</h4>
                        <ul class="list list-unstyled">
                            <li><a href="{{ route('beranda') }}" class="text-color-grey text-color-hover-primary">Beranda</a></li>
                            <li><a href="{{ route('tentang-kami') }}" class="text-color-grey text-color-hover-primary">Tentang Kami</a></li>
                            <li><a href="{{ route('sambutan') }}" class="text-color-grey text-color-hover-primary">Sambutan</a></li>
                            <li><a href="{{ route('berita') }}" class="text-color-grey text-color-hover-primary">Berita</a></li>
                            <li><a href="{{ route('pengumuman') }}" class="text-color-grey text-color-hover-primary">Pengumuman</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h4 class="text-color-light font-weight-bold mb-3">&nbsp;</h4>
                        <ul class="list list-unstyled">
                            <li><a href="{{ route('foto') }}" class="text-color-grey text-color-hover-primary">Foto</a></li>
                            <li><a href="{{ route('video') }}" class="text-color-grey text-color-hover-primary">Video</a></li>
                            <li><a href="{{ route('musabaqadah-center') }}" class="text-color-grey text-color-hover-primary">Musabaqadah Center</a></li>
                            <li><a href="{{ route('hubungi-kami') }}" class="text-color-grey text-color-hover-primary">Hubungi Kami</a></li>
                            <li><a href="{{ route('login') }}" class="text-color-grey text-color-hover-primary">E-MTQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg-transparent">
        <div class="container">
            <hr class="bg-color-light opacity-1">
            <div class="row">
                <div class="col mt-4 mb-4 pb-5">
                    <p class="text-center text-3 mb-0">© 2024, All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>