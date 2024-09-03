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
        <div class="container mb-5">
            <div class="particles-wrapper z-index-1">
                <div id="particles-1"></div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="mb-0">Kalimantan Timur</h4>
                    <p>Foto galeri</p>
                    <div class="row lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                        @foreach($foto as $item)
                        <div class="col-lg-3">
                            <a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon mb-1 me-1" href="/storage/{{$item->url}}" data-plugin-options="{'type':'image'}">
                                <img class="img-fluid" src="/storage/{{$item->url}}" alt="Project Image">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.partials.footer')
</div>
@endsection