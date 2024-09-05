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

    .limited-text {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        max-width: 400px;
        /* Adjust width as needed */
    }

    .limited-text-footer {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        max-width: 400px;
        /* Adjust width as needed */
    }

    .limited-text-desc {
        display: inline-block;
        max-width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
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
                                        PENGUMUMAN PILIHAN
                                    </h2>
                                </div>
                                <h1 class="text-color-dark font-weight-bold text-9 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    {{$utama->judul ?? ""}}
                                </h1>
                                <a <?php echo ("href='/artikel/pengumuman/detail/$utama->id'") ?>>
                                    <div class="d-block appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="margin-bottom: 40px;">
                                        <a <?php echo ("href='/artikel/pengumuman/detail/$pengumuman_latest->id'") ?> data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-modern btn-primary btn-arrow-effect-1 text-capitalize text-2-5 px-5 py-3 anim-hover-translate-top-5px transition-2ms">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <br>
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

                                <img class="appear-animation img-fluid custom-element-wrapper custom-element-8" data-appear-animation="fadeIn" data-appear-animation-delay="900" src="/img/new_project.png" alt="" style="height:125%;">

                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center pt-5">
                            <div class="col-lg-9 text-end pt-5">
                                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                                    <div class="owl-carousel owl-theme stage-margin rounded-nav nav-dark nav-icon-1 nav-size-md nav-position-1" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 2}}, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                                        @for ($i = count($pengumuman)-1; $i >= 1; $i--)
                                        <div class="overlay {{$i % 2 == 0 ? 'overlay-color-primary' : 'overlay-color-dark'}} overlay-show overlay-op-8 rounded overflow-hidden">
                                            <img alt="" class="img-fluid rounded" src="/img/frontend/demos/business-consulting-4/generic/generic-2.jpg">
                                            @php
                                            $id_show = $pengumuman[$i]->id;
                                            @endphp
                                            <a <?php echo ("href='/artikel/pengumuman/detail/$id_show'") ?> class="p-absolute z-index-2 top-0 left-0 w-100 h-100 anim-hover-translate-top-5px transition-2ms">
                                                <span class="p-absolute left-0 bottom-0 text-color-light text-start ms-4 mb-3 ps-2 pb-1">
                                                    <strong class="text-5 negative-ls-05 font-weight-bold limited-text">{{$pengumuman[$i]->judul}}</strong>
                                                    <p class="font-weight-medium text-color-light opacity-7 p-relative bottom-4 mb-0 limited-text-desc">{{$pengumuman[$i]->deskripsi}}</p>
                                                </span>
                                            </a>
                                        </div>
                                        @endfor
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
                            Pengukuhan LPTQ MTQN Kalimantan Timur
                        </h2>
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/OISKG-EjXQ4?si=R-x5Q7tTQH1whGin" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                            <strong data-to="1998">1,998</strong>
                            <label class="font-weight-semibold text-4 opacity-7">Total Partisipan</label>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="35">35</strong>
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
                            <strong data-to="1567">1,567</strong>
                            <label class="font-weight-semibold text-4 opacity-7">Peserta Inti</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                @foreach($faqs as $key => $faq)
                                @if($key < 4) <div class="col-lg-6">
                                    <div class="toggle toggle-primary m-0" data-plugin-toggle>
                                        <section class="toggle">
                                            <a class="toggle-title">{{$faq->pertanyaan}}</a>
                                            <div class="toggle-content">
                                                <p>{{$faq->jawaban}}</p>
                                            </div>
                                        </section>
                                    </div>
                            </div>
                            @endif
                            @endforeach
                            @foreach($faqs as $key => $faq)
                            @if($key >= 4)
                            <div class="col-lg-6">
                                <div class="toggle toggle-primary m-0" data-plugin-toggle>
                                    <section class="toggle">
                                        <a class="toggle-title">{{$faq->pertanyaan}}</a>
                                        <div class="toggle-content">
                                            <p>{{$faq->jawaban}}</p>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            @endif
                            @endforeach
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
                    @if($berita_latest)
                    <div class="col-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <a <?php echo ("href='/artikel/berita/detail/$berita_latest->id'") ?> class="text-decoration-none">
                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top position-relative overlay overflow-hidden border-radius">
                                    <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                        <span class="text-center bg-primary text-color-light border-radius font-weight-semibold line-height-2 px-3 py-2">
                                            <span class="position-relative text-6 z-index-2">
                                                @php
                                                $berita_latest_date = \Carbon\Carbon::parse($berita_latest->tanggal);
                                                @endphp
                                                {{ $berita_latest_date->format('d') }}
                                                <span class="d-block text-0 positive-ls-2 px-1">
                                                    {{ $berita_latest_date->format('M') }}
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                    <img src="/storage/{{$berita_latest->image}}" class="img-fluid border-radius" alt="Lorem Ipsum Dolor" />
                                </div>
                                <div class="card-body py-4 px-0">
                                    <h4 class="font-weight-bold text-5 text-color-hover-primary mb-2">
                                        {{$berita_latest->judul ?? ""}}
                                    </h4>
                                    <span class="text-color-grey font-weight-semibold positive-ls-2 text-2 limited-text-footer">
                                        {{$berita_latest->deskripsi ?? ""}}
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if($pengumuman_latest)
                    <div class="col-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <a <?php echo ("href='/artikel/pengumuman/detail/$pengumuman_latest->id'") ?> class="text-decoration-none">
                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top position-relative overlay overflow-hidden border-radius">
                                    <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                        <span class="text-center bg-primary text-color-light border-radius font-weight-semibold line-height-2 px-3 py-2">
                                            <span class="position-relative text-6 z-index-2">
                                                @php
                                                $pengumuman_latest_date = \Carbon\Carbon::parse($pengumuman_latest->tanggal);
                                                @endphp
                                                {{ $pengumuman_latest_date->format('d') }}
                                                <span class="d-block text-0 positive-ls-2 px-1">{{ $pengumuman_latest_date->format('M') }}</span>
                                            </span>
                                        </span>
                                    </div>
                                    <img src="/storage/{{$pengumuman_latest->image}}" class="img-fluid border-radius" alt="Lorem Ipsum Dolor" />
                                </div>
                                <div class="card-body py-4 px-0">
                                    <h4 class="font-weight-bold text-5 text-color-hover-primary mb-2">
                                        {{$pengumuman_latest->judul ?? ""}}
                                    </h4>
                                    <span class="text-color-grey font-weight-semibold positive-ls-2 text-2 limited-text-footer">
                                        {{$pengumuman_latest->deskripsi ?? ""}}
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </div>

    @include('frontend.partials.footer')
</div>
@endsection