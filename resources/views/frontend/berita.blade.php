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
        <div class="container pb-5 mb-5" style="padding-top: 220px;">

            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">

                    <article class="mb-5">
                        <div class="card bg-transparent border-0">
                            <div class="card-body p-0 z-index-1">
                                <a href="{{ route('berita-example') }}" data-cursor-effect-hover="plus">
                                    <img class="card-img-top rounded-0 mb-2" src="/img/frontend/blog/blog-example.jpeg" alt="Card Image">
                                </a>
                                <p class="text-uppercase text-color-default text-1 my-2">
                                    <time pubdate datetime="2024-06-9">Mei 9, 2024</time>
                                </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="{{ route('berita-example') }}">Logo MTQN XXX Kaltim Resmi Dilaunching</a></h4>
                                    <p class="card-text mb-2">BANTEN - Sekretaris Daerah Provinsi Kaltim Dra Sri Wahyuni MPP yang juga Ketua Umum Lembaga...</p>
                                    <a href="{{ route('berita-example') }}" class="read-more text-color-primary font-weight-semibold mt-0 text-2">Selengkapnya <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="mb-5">
                        <div class="card bg-transparent border-0">
                            <div class="card-body p-0 z-index-1">
                                <a href="{{ route('berita-example-2') }}" data-cursor-effect-hover="plus">
                                    <img class="card-img-top rounded-0 mb-2" src="/img/berita2.jpg" alt="Card Image">
                                </a>
                                <p class="text-uppercase text-color-default text-1 my-2">
                                    <time pubdate datetime="2024-06-9">Now 19, 2024</time>
                                </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="{{ route('berita-example-2') }}">Logo MTQN XXX Kaltim Resmi Dilaunching</a></h4>
                                    <p class="card-text mb-2">Gubernur Kaltim Buka Secara Resmi MTQ Ke-30 Tahun 2024</p>
                                    <a href="{{ route('berita-example-2') }}" class="read-more text-color-primary font-weight-semibold mt-0 text-2">Selengkapnya <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <ul class="pagination pagination-rounded pagination-md justify-content-center">
                        <li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#" data-cursor-effect-hover="fit">1</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit">2</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit"><i class="fas fa-angle-right"></i></a></li>
                    </ul>

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