@extends('frontend.layout.base')

@push('title')
<title>Beranda</title>
@endpush

@push('additional_css')
<style>
    .custom-element-wrapper.custom-element-11:before {
        top: 24px;
        left: 42px;
        width: 75%;
    }
</style>
@endpush

@section('content')
<div class="body">
    @include('frontend.partials.header')

    <div role="main" class="main">

        <section class="section border-0 m-0 bg-color-quaternary p-relative">
            <div class="container">
                <div class="row custom-hero-row">

                    <div class="col">
                        <div class="row pt-5 mt-5 mb-5 pb-5">
                            <div class="col-12 col-lg-6 p-relative pt-5 mt-5">
                                <div class="divider divider-small divider-small-lg appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                    <hr class="bg-primary border-radius">
                                </div>
                                <div class="overflow-hidden mb-1">
                                    <h2 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4-5 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
                                        Musabaqadah Center Kalimantan Timur
                                    </h2>
                                </div>
                                <h1 class="text-color-dark font-weight-bold text-9 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    Musabaqadah Tilawatil Qur'an Tingkat Nasional XXX Resmi Dibuka
                                </h1>
                                <div class="d-block appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                    <a href="#start" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-modern btn-primary btn-arrow-effect-1 text-capitalize text-2-5 px-5 py-3 anim-hover-translate-top-5px transition-2ms">
                                        Selengkapnya
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 p-relative text-end">

                                <div class="appear-animation custom-element-wrapper custom-element-6" data-appear-animation="expandIn" data-appear-animation-delay="500">
                                    <div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3"></div>
                                </div>

                                <div class="appear-animation custom-element-wrapper custom-element-7" data-appear-animation="expandIn" data-appear-animation-delay="700">
                                    <div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3"></div>
                                </div>

                                <div class="appear-animation custom-element-wrapper p-relative custom-element-5" data-appear-animation="expandIn" data-appear-animation-delay="0">
                                    <div class="w-100 h-100">
                                        <div class="custom-element rotate-r-45"></div>
                                    </div>
                                </div>

                                <img class="appear-animation img-fluid custom-element-wrapper custom-element-8" data-appear-animation="fadeIn" data-appear-animation-delay="900" src="/img/avatar_kaltim.png" alt="" style="height:122%;">

                            </div>
                        </div>
                        <div class="row align-items-end justify-content-end pt-5">
                            <div class="col-lg-12 text-end pt-5">
                                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                                    <div class="owl-carousel owl-theme stage-margin rounded-nav nav-dark nav-icon-1 nav-size-md nav-position-1" data-plugin-options="{'responsive': {'0': {'items': 3}, '479': {'items': 3}, '768': {'items': 3}, '979': {'items': 3}, '1199': {'items': 3}}, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                                        <div class="overlay overlay-color-primary overlay-show overlay-op-8 rounded overflow-hidden">
                                            <img alt="" class="img-fluid rounded" src="img/frontend/demos/business-consulting-4/generic/generic-2.jpg">
                                            <a href="#" class="p-absolute z-index-2 top-0 left-0 w-100 h-100 anim-hover-translate-top-5px transition-2ms">
                                                <span class="d-flex align-items-center text-color-light text-center" style="height: 100%;">
                                                    <strong class="text-5 negative-ls-05 font-weight-bold">Hari Pertama MTQ, Sejumlah Cabang Perlombaan Digelar Di Lima Lokasi</strong>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="overlay overlay-color-dark overlay-show overlay-op-9 rounded overflow-hidden">
                                            <img alt="" class="img-fluid rounded" src="img/frontend/demos/business-consulting-4/generic/generic-3.jpg">
                                            <a href="#" class="p-absolute z-index-2 top-0 left-0 w-100 h-100 anim-hover-translate-top-5px transition-2ms">
                                                <span class="d-flex align-items-center text-color-light text-center" style="height: 100%;">
                                                    <strong class="text-5 negative-ls-05 font-weight-bold">Dibuka Gubernur Akmal Malik, MTQ Tingkat Nasional XXX Berlangsung Meriah</strong>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="overlay overlay-color-primary overlay-show overlay-op-8 rounded overflow-hidden">
                                            <img alt="" class="img-fluid rounded" src="img/frontend/demos/business-consulting-4/generic/generic-4.jpg">
                                            <a href="#" class="p-absolute z-index-2 top-0 left-0 w-100 h-100 anim-hover-translate-top-5px transition-2ms">
                                                <span class="d-flex align-items-center text-color-light text-center" style="height: 100%;">
                                                    <strong class="text-5 negative-ls-05 font-weight-bold">Usai Dilantik, Dewan Hakim Dan Majelis Hakim Siap Jalankan Tugas</strong>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="appear-animation custom-element-wrapper custom-element-1" data-appear-animation="expandIn" data-appear-animation-delay="200">
                <div class="w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 2.1, 'transition': true, 'transitionDuration': 500}">
                    <div class="custom-element rotate-r-45"></div>
                </div>
            </div>

            <div class="appear-animation custom-element-wrapper custom-element-2" data-appear-animation="expandIn" data-appear-animation-delay="200">
                <div class="w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 2.2, 'transition': true, 'transitionDuration': 500}">
                    <div class="custom-element rotate-r-45"></div>
                </div>
            </div>

            <div class="appear-animation custom-element-wrapper custom-element-3" data-appear-animation="expandIn" data-appear-animation-delay="200">
                <div class="w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 2.3, 'transition': true, 'transitionDuration': 500}">
                    <div class="custom-element rotate-r-45"></div>
                </div>
            </div>

        </section>

        <section class="section border-0 bg-transparent m-0" id="start">
            <div class="container py-5 mb-3">
                <div class="row">
                    <div class="col text-center">

                        <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                            <hr class="bg-primary border-radius m-auto">
                        </div>
                        <div class="overflow-hidden mb-1">
                            <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
                                TEMA MTQ NASIONAL XXX TAHUN 2024
                            </h3>
                        </div>
                        <h2 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            Mewujudkan Masyarakat Cinta Al-Qur'an Untuk Bangsa Yang Bermartabat Di Bumi Nusantara
                        </h2>

                    </div>
                </div>
                <div class="row pt-4 pb-5">
                    <div class="col-lg-6 text-center p-relative pt-5">

                        <div class="appear-animation custom-element-wrapper custom-element-9" data-appear-animation="expandIn" data-appear-animation-delay="1000">
                            <div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3"></div>
                        </div>

                        <div class="appear-animation custom-element-wrapper custom-element-10" data-appear-animation="expandIn" data-appear-animation-delay="1200">
                            <div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3"></div>
                        </div>

                        <div class="appear-animation custom-element-wrapper custom-element-11 p-relative rotate-r-45" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="background: white;">
                            <img class="img-fluid" src="img/Logo MTQ XXX rotated.png" alt="" style="background: white; box-shadow: 8px -8px lightgrey; max-width: 75%;">
                        </div>

                    </div>
                    <div class="col-lg-6 pt-5 mt-5 pt-lg-0 mt-lg-0">
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                            <p class="font-weight-medium text-4-5 line-height-5">
                                Menyadari bahwa generasi muda adalah generasi penerus bangsa yang akan menjadi sosok-sosok penentu masa depan bangsa Indonesia, sehingga Penyelenggaraan MTQ Tingkat Nasional XXX Tahun 2024 adalah salah satu momentum penting dalam mempersiapkan generasi agar memiliki mental dan spiritual yang kuat guna membentuk generasi yang bermoral serta berakhlak mulia.
                            </p>
                            <!-- <p class="text-3-5">
                                
                            </p> -->

                            <ul class="list list-icons list-icons-style-2 list-icons-lg">
                                <li class="line-height-9 text-3-5 mb-1">
                                    <i class="fas fa-check border-width-2 text-3"></i>KALTIM
                                </li>
                                <li class="line-height-9 text-3-5 mb-1">
                                    <i class="fas fa-check border-width-2 text-3"></i>NUSANTARA
                                </li>
                                <li class="line-height-9 text-3-5 mb-1">
                                    <i class="fas fa-check border-width-2 text-3"></i>BERKEADABAN
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section border-0 bg-quaternary m-0">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col col-lg-9 text-center">

                        <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                            <hr class="bg-primary border-radius m-auto">
                        </div>
                        <div class="overflow-hidden mb-1">
                            <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
                                MTQ NASIONAL XXX
                            </h3>
                        </div>
                        <h2 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            Keindahan dan Kesiapan Kalimantan Timur
                        </h2>

                        <!-- <p class="font-weight-medium text-4-5 line-height-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            
                        </p> -->

                    </div>
                </div>

                <div class="row py-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                    <div class="col-md-12 mb-4 mb-md-0">
                        <div class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms anim-hover-inner-wrapper" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/berau14.JPG'); height: 745px; background-size:cover;">
                            <div class="card-body p-relative zindex-1 p-5 text-center d-flex justify-content-center align-items-center">
                                <div class="anim-hover-inner-translate-top-20px transition-3ms">
                                    <h1 class="card-title mt-4 mb-2 font-weight-bold" style="color: white;">SUKSESKAN MTQ NASIONAL XXX TAHUN 2024</h1>
                                    <h2 class="card-text" style="color: white;">KALIMANTAN TIMUR - IBUKOTA NUSANTARA</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section border-0 bg-dark m-0 p-relative" style="background: url('img/sunset_mesjid_baru.png'); background-size:cover;">
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
                            <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
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
                            <strong data-to="14">14</strong>
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

        <!-- <section class="section border-0 bg-quaternary m-0">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col col-lg-9 text-center">

                        <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                            <hr class="bg-primary border-radius m-auto">
                        </div>
                        <div class="overflow-hidden mb-1"> -->
        <!-- <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">What They Say About Us</h3> -->
        <!-- </div>
                        <h2 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Peserta MTQ</h2>

                    </div>
                </div> -->

        <!-- <div class="row mt-4">
                    <div class="col appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">

                        <div class="owl-carousel owl-theme stage-margin rounded-nav nav-dark nav-icon-1 nav-size-md mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 2}}, 'margin': 0, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                            <div class="mx-3">
                                <div class="testimonial testimonial-style-3 testimonial-style-3-light">
                                    <blockquote class="p-3 before-d-none">
                                        <p class="font-weight-medium text-4 line-height-5 p-3 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down p-relative z-index-1"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="img/frontend/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3">
                                <div class="testimonial testimonial-style-3 testimonial-style-3-light">
                                    <blockquote class="p-3 before-d-none">
                                        <p class="font-weight-medium text-4 line-height-5 p-3 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down p-relative z-index-1"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="img/frontend/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3">
                                <div class="testimonial testimonial-style-3 testimonial-style-3-light">
                                    <blockquote class="p-3 before-d-none">
                                        <p class="font-weight-medium text-4 line-height-5 p-3 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down p-relative z-index-1"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="img/frontend/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->

        <!-- <div class="row d-flex align-items-center text-center mt-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    <img src="img/Peserta 1.jpg" alt="" class="img-fluid p-0" style="max-width: 16%; height: 170px;">
                    <img src="img/Peserta 2.jpg" alt="" class="img-fluid p-0" style="max-width: 16%; height: 170px;">
                    <img src="img/Peserta 3.jpg" alt="" class="img-fluid p-0" style="max-width: 16%; height: 170px;">
                    <img src="img/Peserta 4.jpg" alt="" class="img-fluid p-0" style="max-width: 16%; height: 170px;">
                    <img src="img/Peserta 5.jpg" alt="" class="img-fluid p-0" style="max-width: 16%; height: 170px;">
                    <img src="img/Peserta 6.jpg" alt="" class="img-fluid p-0" style="max-width: 16%; height: 170px;">
                </div>

                <div class="row">
                    <div class="d-flex align-items-center justify-content-center mt-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <a href="#start" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-modern btn-primary btn-arrow-effect-1 text-capitalize text-2-5 px-5 py-3 anim-hover-translate-top-5px transition-2ms">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="section border-0 bg-light m-0">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col col-lg-9 text-center">

                        <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                            <hr class="bg-primary border-radius m-auto">
                        </div>
                        <div class="overflow-hidden mb-1">
                            <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
                                FAQ
                            </h3>
                        </div>
                        <h2 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            Panduan MTQ
                        </h2>

                    </div>

                    <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="container py-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="toggle toggle-primary m-0" data-plugin-toggle>
                                        <section class="toggle">
                                            <a class="toggle-title">Bagaimana cara melihat data Peserta?</a>
                                            <div class="toggle-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                                            </div>
                                        </section>

                                        <section class="toggle">
                                            <a class="toggle-title">Dimana lokasi perlombaan?</a>
                                            <div class="toggle-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa.</p>
                                            </div>
                                        </section>

                                        <section class="toggle">
                                            <a class="toggle-title">Lewat manakah rute Pawai Taaruf?</a>
                                            <div class="toggle-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                                            </div>
                                        </section>

                                        <section class="toggle">
                                            <a class="toggle-title">Bagaimana cara melihat data peserta?</a>
                                            <div class="toggle-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="toggle toggle-primary m-0" data-plugin-toggle>
                                        <section class="toggle">
                                            <a class="toggle-title">Apakah peserta disediakan transportasi?</a>
                                            <div class="toggle-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa.</p>
                                            </div>
                                        </section>

                                        <section class="toggle">
                                            <a class="toggle-title">Dimana lokasi penginapan peserta?</a>
                                            <div class="toggle-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                                            </div>
                                        </section>

                                        <section class="toggle">
                                            <a class="toggle-title">Dimana lokasi bazaar?</a>
                                            <div class="toggle-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                                            </div>
                                        </section>

                                        <section class="toggle">
                                            <a class="toggle-title">bagaimana cara melihat pengumuman?</a>
                                            <div class="toggle-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa.</p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section border-0 bg-quaternary m-0">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col col-lg-9 text-center">

                        <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                            <hr class="bg-primary border-radius m-auto">
                        </div>
                        <div class="overflow-hidden mb-1">
                            <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
                                Artikel
                            </h3>
                        </div>
                        <h2 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            Pengumuman & Berita
                        </h2>

                    </div>
                </div>

                <div class="row justify-content-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                    <div class="col-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <a href="/artikel/berita/example-2" class="text-decoration-none">
                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top position-relative overlay overflow-hidden border-radius">
                                    <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                        <span class="text-center bg-primary text-color-light border-radius font-weight-semibold line-height-2 px-3 py-2">
                                            <span class="position-relative text-6 z-index-2">
                                                19
                                                <span class="d-block text-0 positive-ls-2 px-1">NOV</span>
                                            </span>
                                        </span>
                                    </div>
                                    <img src="img/berita2.jpg" class="img-fluid border-radius" alt="Lorem Ipsum Dolor" />
                                </div>
                                <div class="card-body py-4 px-0">
                                    <h4 class="font-weight-bold text-5 text-color-hover-primary mb-2">
                                        Gubernur Kaltim Buka Secara Resmi MTQ Ke-30 Tahun 2024
                                    </h4>
                                    <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">
                                        Perhelatan Fahmil Qur'an Beregu pada Musabaqoh Tilawatil Qur'an Nasional berakhir, beregu putra..
                                    </span>
                                    <!-- <a href="demo-business-consulting-4-blog-post.html" class="read-more text-color-primary font-weight-semibold mt-0 text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <a href="/artikel/berita/example" class="text-decoration-none">
                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top position-relative overlay overflow-hidden border-radius">
                                    <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                        <span class="text-center bg-primary text-color-light border-radius font-weight-semibold line-height-2 px-3 py-2">
                                            <span class="position-relative text-6 z-index-2">
                                                15
                                                <span class="d-block text-0 positive-ls-2 px-1">FEB</span>
                                            </span>
                                        </span>
                                    </div>
                                    <img src="/img/frontend/blog/blog-example.jpeg" class="img-fluid border-radius" alt="Lorem Ipsum Dolor" />
                                </div>
                                <div class="card-body py-4 px-0">
                                    <h4 class="font-weight-bold text-5 text-color-hover-primary mb-2">
                                        Logo MTQN XXX Kaltim Resmi Dilaunching, Sekda Sri Wahyuni: Kami Tunggu Di Kaltim
                                    </h4>
                                    <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">
                                        BANTEN - Sekretaris Daerah Provinsi Kaltim Dra Sri Wahyuni MPP yang juga Ketua umum Pengembangan..
                                    </span>
                                    <!-- <a href="demo-business-consulting-4-blog-post.html" class="read-more text-color-primary font-weight-semibold mt-0 text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>

    </div>

    @include('frontend.partials.footer')
</div>
@endsection