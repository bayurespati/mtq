@extends('frontend.layout.base')

@push('title')
<title>Beranda</title>
@endpush

@push('additional_css')
<style>
    .card-body img {
        height: 100% !important;
        width: 100% !important;
    }
</style>
@endpush

@section('content')
<div class="body">
    @include('frontend.partials.header')

    <div role="main" class="main">
        <div class="container" style="padding-top: 220px;">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <h2 class="mb-2" style="font-weight: bold;">{{$berita->judul}}</h2>
                    <div class="d-flex justify-content-start">
                        <p class="text-uppercase text-4 mb-3 text-color-default">
                            <time>
                                <i class="fas fa-calendar border-width-2 text-3"></i>
                                @php
                                $date_tittle = \Carbon\Carbon::parse($berita->tanggal);
                                @endphp
                                {{$date_tittle->format('M d, Y')}}
                            </time>
                        </p>
                        <p class="text-4 mb-3 text-color-default ms-4"><i class="fas fa-user border-width-2 text-3"></i> {{$berita->author}}</p>
                        <p class="text-4 mb-3 text-color-default ms-4">
                            <i class="fas fa-eye border-width-2 text-3"></i>
                            {{$berita->views}}
                        </p>
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
                                    <img class="card-img-top rounded-0" src="/storage/{{$berita->image}}" alt="Card Image">
                                </div>

                                <div class="card-body p-0">
                                    {!! $berita->deskripsi !!}
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
                            <h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3">Berita Terpopuler</h3>
                            @foreach($berita_latest_3 as $item)
                            @php
                            $date = \Carbon\Carbon::parse($item->tanggal);
                            @endphp
                            <a <?php echo ("href='/artikel/berita/detail/$item->id'") ?> class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">{{$date->format('M d, Y')}}</a>
                            <a <?php echo ("href='/artikel/berita/detail/$item->id'") ?> class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">{{$item->judul}}</a>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.partials.footer')
</div>
@endsection