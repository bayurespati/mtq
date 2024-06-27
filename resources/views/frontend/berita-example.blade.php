@extends('frontend.layout.base')

@push('title')
<title>Beranda</title>
@endpush

@push('additional_css')
<style>
</style>
@endpush

@section('content')
<div class="body">
    @include('frontend.partials.header')

    <div role="main" class="main">
        <div class="container" style="padding-top: 220px;">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <h2 class="mb-2" style="font-weight: bold;">Logo MTQN XXX Kaltim Resmi Dilaunching, Sekda Sri Wahyuni: Kami Tunggu di Kaltim</h2>
                    <div class="d-flex justify-content-start">
                        <p class="text-uppercase text-4 mb-3 text-color-default"><time pubdate datetime="2024-06-9"><i class="fas fa-calendar border-width-2 text-3"></i> Mei 9, 2024</time></p>
                        <p class="text-4 mb-3 text-color-default ms-4"><i class="fas fa-user border-width-2 text-3"></i> Donny Kusuma</p>
                        <p class="text-4 mb-3 text-color-default ms-4"><i class="fas fa-eye border-width-2 text-3"></i> 236</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pb-5 pt-2 mb-5">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">

                    <article>
                        <div class="card border-0">
                            <div class="card-body z-index-1 p-0">
                                <div class="post-image pb-4">
                                    <img class="card-img-top rounded-0" src="/img/frontend/blog/blog-example.jpeg" alt="Card Image">
                                </div>

                                <div class="card-body p-0">
                                    <p>
                                        BANTEN - Sekretaris Daerah Provinsi Kaltim Dra Sri Wahyuni MPP yang juga Ketua Umum Lembaga Pengembangan Tilawatil Qur'an (LPTQ) Kaltim mengatakan, Kaltim siap sebagai tuan rumah MTQ Tingkat Nasional (MTQN) XXX yang direncanakan 6-16 September 2024 mendatang.
                                    </p>
                                    <p>
                                        "Kami tunggu di Kaltim," katanya di hadapan ratusan peserta Rapat Kerja Nasional (Rakernas) LPTQ di Hotel Santika BSD Banten, Kamis petang (9/5/2024).
                                    </p>
                                    <p>
                                        Pada Rakernas yang dibuka Dirjen Bimbingan Masyarakat (Bimas) Islam Kementerian Agama RI Prof H Kamaruddin Amin itu juga sekaligus ditandai dengan launching logo resmi MTQN XXX Kaltim.
                                        Ketika itu Sekda Sri Wahyuni menyerahkan Bendera Logo MTQN XXX kepada Dirjen.
                                    </p>
                                    <p>
                                        Launching logo disemarakkan pula dengan pembacaan seni Tarsul Kutai oleh Nova Abelia yang difasilitasi Seraung Exotic Kaltim dan persembahan Tari Jepen Muslim Bulik Madam AW Grup yang didatangkan dari Balikpapan.
                                    </p>
                                    <p>
                                        Selain itu, ada pula pemutaran video sayembara logo dan video kesiapan Kaltim sebagai tuan rumah.
                                    </p>
                                    <p>
                                        "Mulanya kami berencana sebagai tuan rumah tahun 2026 untuk menandai 50 tahun sejak pertama kali Kaltim tuan rumah MTQN tahun 1976 silam. Tapi Pusat minta tahun 2024 ini. Tidak mengapa, bahkan kami bersyukur karena MTQN XXX kali ini juga sangat bersejarah karena untuk pertama kalimya terlaksana di Ibu Kota Nusantara (IKN)," ungkap Sri Wahyuni yang disambut tepuk tangan peserta Rakernas.
                                    </p>
                                    <p>
                                        Dirjen Bimas Islam memberi apresiasi yang tinggi kepada LPTQ dan Pemerintah Provinsi Kaltim yang bekerja keras menyiapkan diri sebagai tuan rumah.
                                        "Mari kita dukung, semoga MTQN XXX di Kaltim dan IKN sukses terlaksana," kata Kamaruddin Amin.
                                    </p>
                                    <p>
                                        Hal senada Dirjen disampaikan pula oleh Direktur Penerangan Agama Islam yang juga Sekretaris LPTQ Pusat Dr H Ahmad Zayadi.
                                    </p>
                                    <p>
                                        Sementara itu turut hadir di pembukaan Rakernas tersebut. Karo Kesra Setdaprov Kaltim Dr Hj Dasmiah, Kakanwil Agama Kaltim Drs H Abdul Kholiq, Pengurus LPTQ Kaltim Drs H Maslekhan, Dr Moh Jauhar Efendi dan Prof Bambang Iswanto.
                                    </p>
                                    <p>
                                        (Hadri/ Humas LPTQ Kaltim)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
                <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0">
                    <aside class="sidebar">
                        <div class="px-3">
                            <form action="page-search-results.html" method="get">
                                <div class="input-group mb-3 pb-1">
                                    <input class="form-control box-shadow-none text-1 border-0 bg-color-grey" placeholder="Search..." name="s" id="s" type="text">
                                    <button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="py-1 clearfix">
                            <hr class="my-2">
                        </div>
                        <div class="px-3 mt-4">
                            <h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3">Berita Populer</h3>
                            <div class="pb-2 mb-1">
                                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">Juni 10, 2024</a>
                                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem ipsum dolor sit amet</a>
                                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">Juni 10, 2024</a>
                                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur adipiscing elit</a>
                                <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">Juni 10, 2024</a>
                                <a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus sollicitudin nibh luctus</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

    </div>

    @include('frontend.partials.footer')
</div>
@endsection