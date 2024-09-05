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
        <section class="section border-0 bg-quaternary m-0">
            <div class="container py-5" style="margin-bottom: 100px;">
                <div class="row justify-content-center text-center">
                    <div class="overflow-hidden mb-1">
                        <h1 class="text-color-grey" data-appear-animation="maskUp" data-appear-animation-delay="100">
                            VIDIO
                        </h1>
                    </div>
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <div class=" row">
                            @foreach($videos as $vidio)
                            <div class="col-md-4" style="padding: 3px;">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="row" style="margin-bottom: 15px;">
                                        <div class="col pb-4">
                                            <h4>{{$vidio->nama}}</h4>
                                        </div>
                                        <div class="ratio ratio-16x9" style="width: 90%;">
                                            <iframe width="560" height="315" src="{{$vidio->embed}}?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('frontend.partials.footer')
</div>
@endsection