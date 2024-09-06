@extends('frontend.layout.base')

@push('title')
<title>Sambutan</title>
@endpush

@push('additional_css')
<style>
</style>
@endpush

@section('content')
<div class="body">
    @include('frontend.partials.header')

    <div role="main" class="main">
        <div class="container pt-5">
            <div class="row py-4 mb-2">
                <div class="col-md-7 order-2">
                    <div class="overflow-hidden">
                        <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Akmal Malik</h2>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500" style="color: #64B6AC">Pj. Gubernur Provisi Kalimatan Timur</p>
                    </div>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                    <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                    <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                </div>
                <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <img src="/img/akmal_malik.png" class="img-fluid mb-2" alt="">
                </div>
            </div>
        </div>
    </div>

    @include('frontend.partials.footer')
</div>
@endsection