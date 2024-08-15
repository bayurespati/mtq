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
                    <h2 class="mb-2" style="font-weight: bold;">{{$pengumuman->judul}}</h2>
                    <div class="d-flex justify-content-start">
                        <p class="text-uppercase text-4 mb-3 text-color-default">
                            <time pubdate datetime="2024-06-9">
                                <i class="fas fa-calendar border-width-2 text-3"></i>
                                {{$pengumuman['date']->format('M d, Y')}}
                            </time>
                        </p>
                        <p class="text-4 mb-3 text-color-default ms-4"><i class="fas fa-user border-width-2 text-3"></i> {{$pengumuman->author}}</p>
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
                                    <img class="card-img-top rounded-0" src="/{{$pengumuman->image}}" alt="Card Image">
                                </div>

                                <div class="card-body p-0">
                                    @foreach($pengumuman['final'] as $item)
                                    <p>
                                        {{$item}}
                                    </p>
                                    @endforeach
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
                            <h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3">Pengumuman Populer</h3>
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