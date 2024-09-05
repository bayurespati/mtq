@extends('frontend.layout.base')

@push('title')
<title>Beranda</title>
@endpush

@push('additional_css')
<style>
    .limited-text-footer {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        max-width: 400px;
        height: 100px;
    }

    .limited-text-title {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        max-width: 400px;
        -webkit-line-clamp: 2;
        height: 70px;
    }
</style>
@endpush

@section('content')
<div class="body">
    @include('frontend.partials.header')

    <div role="main" class="main">
        <div class="container pb-5 mb-5" style="padding-top: 220px;">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="row">
                        @foreach($berita as $item)
                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image" style="height: 220px; border: 1px solid rgba(38, 70, 83, 0.4);">
                                    <a <?php echo ("href='/artikel/berita/detail/$item->id'") ?>>
                                        <img src="/storage/{{$item->image}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" style="height: 100%; width: 100%; object-fit: cover;" />
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 limited-text-title">
                                        <a <?php echo ("href='/artikel/berita/detail/$item->id'") ?>>
                                            {{$item->judul}}
                                        </a>
                                    </h2>
                                    <p class="limited-text-footer">
                                        {{ strip_tags($item->deskripsi)}}
                                    </p>
                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i><a <?php echo ("href='/artikel/berita/detail/$item->id'") ?>>{{$item->author}}</a> </span>
                                        <span>
                                            @php
                                            $date = \Carbon\Carbon::parse($item->tanggal);
                                            @endphp
                                            {{$date->format('M d, Y')}}
                                        </span>
                                        <span class="d-block mt-2"><a <?php echo ("href='/artikel/berita/detail/$item->id'") ?> class="btn btn-xs btn-light text-1 text-uppercase">SELENGKAPNYA</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                    {{ $berita->links('vendor.pagination.bootstrap-5') }}
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