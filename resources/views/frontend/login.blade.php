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
            <div class="container">
                <div class="row custom-hero-row">

                    <div class="col">
                        <div class="row pt-5 mt-5 mb-5 pb-5">
                            <div class="col-12 col-lg-6 p-relative pt-5 mt-5">
                                <div class="divider divider-small divider-small-lg appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                    <hr class="bg-primary border-radius">
                                </div>
                                <div class="overflow-hidden mb-1">
                                    <h2 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4-5 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
                                        Login E-MTQ
                                    </h2>
                                </div>
                                <form action="/login" method="POST">
                                    @csrf
                                    <h1 class="text-color-dark font-weight-bold text-9 pb-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                        Username
                                    </h1>
                                    <input name="email" class="form-control form-control-lg mb-4 appear-animation" type="text" placeholder="" aria-label=".form-control-lg example" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">

                                    <h1 class="text-color-dark font-weight-bold text-9 pb-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                        Password
                                    </h1>
                                    <input name="password" class="form-control form-control-lg mb-4 appear-animation" type="password" placeholder="" aria-label=".form-control-lg example" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                    @error('email')
                                    <div style="color: red !important; margin-bottom: 10px;">
                                        <p style="color: red">* Alamat email atau password anda salah</p>
                                    </div>
                                    @enderror('email')
                                    <div class="d-flex">
                                        <div class="d-block appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                            <button data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-modern btn-primary btn-arrow-effect-1 text-capitalize text-2-5 px-5 py-3 anim-hover-translate-top-5px transition-2ms" type="submit">
                                                Login
                                            </button>
                                        </div>
                                        <a href="#" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="appear-animation ms-2 text-capitalize text-2-5 px-5 py-3 anim-hover-translate-top-5px transition-2ms" style="text-decoration: underline; color: #64B6AC;">
                                            Lupa Password
                                        </a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-lg-6 p-relative text-end">

                                <div class="appear-animation custom-element-wrapper custom-element-6" data-appear-animation="expandIn" data-appear-animation-delay="500">
                                    <div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3"></div>
                                </div>

                                <div class="appear-animation custom-element-wrapper custom-element-7" data-appear-animation="expandIn" data-appear-animation-delay="700">
                                    <div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3"></div>
                                </div>

                                <div class="appear-animation custom-element-wrapper p-relative custom-element-5" data-appear-animation="expandIn" data-appear-animation-delay="0">
                                    <div class="w-100 h-100">
                                        <div class="custom-element rotate-r-45"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="appear-animation custom-element-wrapper custom-element-1" data-appear-animation="expandIn" data-appear-animation-delay="200">
                <div class="w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 2.1, 'transition': true, 'transitionDuration': 500}">
                    <div class="custom-element rotate-r-45"></div>
                </div>
            </div>

            <div class="appear-animation custom-element-wrapper custom-element-2" data-appear-animation="expandIn" data-appear-animation-delay="200">
                <div class="w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 2.2, 'transition': true, 'transitionDuration': 500}">
                    <div class="custom-element rotate-r-45"></div>
                </div>
            </div>

            <div class="appear-animation custom-element-wrapper custom-element-3" data-appear-animation="expandIn" data-appear-animation-delay="200">
                <div class="w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 2.3, 'transition': true, 'transitionDuration': 500}">
                    <div class="custom-element rotate-r-45"></div>
                </div>
            </div>

        </section>

    </div>

    @include('frontend.partials.footer')
</div>
@endsection