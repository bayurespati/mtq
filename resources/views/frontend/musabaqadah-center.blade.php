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

                    <section class="card">
                        <header class="card-header" style="background: #64B6AC;  color: white">
                            <div class="card-actions">
                                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                            </div>

                            <h2 class="card-title">Daftar Lokasi Lomba</h2>
                        </header>
                        <div class="card-body">
                            <table class="table table-responsive-md table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>CABANG LOMBA</th>
                                        <th>TEMPAT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $item)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$item[0]}}</td>
                                        <td>{{$item[1]}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </section>

    </div>

    @include('frontend.partials.footer')
</div>
@endsection