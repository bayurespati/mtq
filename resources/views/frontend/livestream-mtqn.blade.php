@extends('frontend.layout.base')

@push('title')
<title>Livestream MTQN</title>
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
                            Livestream MTQN
                        </h1>
                    </div>
                    <div class="col col-lg-9 text-center">
                        @foreach($livestream_mtqn as $item)
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col pb-4">
                                <h4>{{$item->nama}}</h4>
                            </div>
                            <div class="ratio ratio-16x9">
                                <iframe width="560" height="315" src="{{$item->embed}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

    </div>

    @include('frontend.partials.footer')
</div>
@endsection