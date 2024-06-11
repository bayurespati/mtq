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

        <section class="section border-0 m-0 bg-color-quaternary p-relative">
            <div class="container pt-5 mt-5">
                <div class="row row pt-5 mt-5 mb-5 pb-5 custom-hero-row justify-content-center">
                    <div class="col col-lg-9 text-center">

                        <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                            <hr class="bg-primary border-radius m-auto">
                        </div>
                        <div class="overflow-hidden mb-1">
                            <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
                                CABANG LOMBA
                            </h3>
                        </div>
                        <h2 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            Informasi Lokasi, Waktu dan Detil
                            <br>
                            Seputar Cabang Lomba
                        </h2>
                    </div>

                    <div class="row d-flex justify-content-center align-items-center">
                        <img src="/img/table1.png" class="img-fluid border-radius" alt="Lorem Ipsum Dolor" />
                    </div>

                    <div class="row d-flex justify-content-center align-items-center mt-5">
                        <img src="/img/table2.png" class="img-fluid border-radius" alt="Lorem Ipsum Dolor" />
                    </div>
                </div>
            </div>
        </section>

    </div>

    @include('frontend.partials.footer')
</div>
@endsection