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
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <div class="row text-center pb-4">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                    <span>Tentang MTQN</span>
                                    <span class="word-rotator-words bg-primary">
                                        <b class="is-visible">30</b>
                                        <b>XXX</b>
                                    </span>
                                    <span> Kalimantan Timur</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                                    Penunjukan Provinsi Kalimantan
                                    Timur sebagai tuan rumah MTQ
                                    Tingkat Nasional XXX tahun 2024
                                    melalui Keputusan Menteri
                                    Agama No 321 tahun 2023
                                    tentang Penetapan Provinsi
                                    Kalimantan Timur sebagai
                                    Tempat Penyelenggaraan
                                    Musabaqah Tilawatil Quran
                                    Tingkat Nasional XXX Tahun 2024.
                                </p>
                                <br>
                                <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                                    Pencanangan 5 SUKSES MTQ
                                    NASIONAL XXX TAHUN 2024 oleh
                                    pemerintah Provinsi Kalimantan
                                    Timur, yang meliputi:
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 mb-5">
                        <di class="col-md-1"></di>
                        <div style="align-items: center" class="col-md-2 appear-animation text-center" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                            <h3 class="font-weight-bold text-4 mb-2">Sukses penyelenggaraan</h3>
                        </div>
                        <div style="align-items: center" class="col-md-2 appear-animation text-center" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                            <h3 class="font-weight-bold text-4 mb-2" style="width: 100%;">Sukses Prestasi</h3>
                        </div>
                        <div style="align-items: center" class="col-md-2 appear-animation text-center" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                            <h3 class="font-weight-bold text-4 mb-2">Sukses administrasi</h3>
                        </div>
                        <div style="align-items: center" class="col-md-2 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                            <h3 class="font-weight-bold text-4 mb-2">Sukses syiar agama</h3>
                        </div>
                        <div style="align-items: center" class="col-md-2 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                            <h3 class="font-weight-bold text-4 mb-2">Sukses pemberdayaan ekonomi masyarakat</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section border-0 bg-dark m-0 p-relative" style="background: url('/img/sunset_mesjid_baru.png'); background-size:cover;">
            <div class="particles-wrapper z-index-1">
                <div id="particles-1"></div>
            </div>
            <div class="container py-5 p-relative z-index-2">
                <div class="row">
                    <div class="col text-center">

                        <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                            <hr class="bg-primary border-radius m-auto">
                        </div>
                        <div class="overflow-hidden mb-1">
                            <h3 class="font-weight-semi-bold text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
                                STATISTIK KEGIATAN
                            </h3>
                        </div>
                        <h2 class="text-color-light font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            MTQ Nasional XXX 2024
                            <br>
                            Dalam Angka
                        </h2>
                    </div>
                </div>
                <div class="row pt-4 pb-3 counters text-light appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="6826">6,826</strong>
                            <label class="font-weight-semibold text-4 opacity-7">Total Partisipan</label>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="38">38</strong>
                            <label class="font-weight-semibold text-4 opacity-7">Provinsi</label>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-sm-0">
                        <div class="counter">
                            <strong data-to="12">12</strong>
                            <label class="font-weight-semibold text-4 opacity-7">Cabang Lomba</label>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-sm-0">
                        <div class="counter">
                            <strong data-to="1836">1,836</strong>
                            <label class="font-weight-semibold text-4 opacity-7">Peserta</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-3 bg-color-grey m-0 border-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                        <p class="lead">Perlunya segera dilakukan
                            langkah-langkah persiapan yang
                            matang dan sistematis melalui
                            koordinasi dan sinergi yang solid
                            di antara para stakeholders
                            penyelenggaraan MTQ Nasional
                            XXX tahun 2024.
                        </p>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5" style="top: 1.7rem;">
                        <img src="/img/generic/generic-corporate-3-1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
                        <img src="/img/generic/generic-corporate-3-2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                        <img src="/img/generic/generic-corporate-3-3.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('frontend.partials.footer')
</div>
@endsection