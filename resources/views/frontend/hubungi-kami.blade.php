@extends('frontend.layout.base')

@push('title')
<title>Beranda</title>
@endpush

@push('additional_css')
<style>
    .map {
        position: relative;
        height: 470px;
    }

    .map iframe {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
    }

    .map iframe.map-gray {
        -webkit-filter: brightness(104%) contrast(99%) saturate(0%) blur(0px) hue-rotate(0deg);
        filter: brightness(104%) contrast(99%) saturate(0%) blur(0px) hue-rotate(0deg);
    }
</style>
@endpush

@section('content')
<div class="body">

    @include('frontend.partials.header')

    <div role="main" class="main">
        <div class="particles-wrapper z-index-1">
            <div id="particles-1"></div>
        </div>
        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <section class="map map-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        @if(Cookie::get('current_lang') == 'eng')
                        <h3 class="d-none">our office map</h3>
                        @else
                        <h3 class="d-none">lokasi kantor kami</h3>
                        @endif
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6657500868646!2d117.13675587404114!3d-0.50106883527007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67fa0cf3b5609%3A0x9efc250dd531e8b4!2sKantor%20Gubernur%20Kalimantan%20Timur!5e0!3m2!1sen!2sid!4v1723374774746!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-6">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0">Hubungi Kami</h2>
                    <p class="mb-4">Jangan sungkan untuk bertanya apapun, kami bersedia membantu</p>

                    <form class="contact-form" action="php/contact-form.php" method="POST">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Pesan Anda telah dikirimkan kepada kami.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> Terjadi kesalahan dalam pengiriman pesan Anda.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Nama Lengkap</label>
                                <input type="text" value="" data-msg-required="Tolong masukan nama Anda." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Alamat Email</label>
                                <input type="email" value="" data-msg-required="Tolong masukan alamat email Anda." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Judul Pesan</label>
                                <input type="text" value="" data-msg-required="Tolong masukan judul pesan." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Pesan</label>
                                <textarea maxlength="5000" data-msg-required="Tolong masukan pesan Anda." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Kirim Pesan" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="mt-2 mb-1">Kantor <strong>Kami</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i>
                                <strong class="text-dark">Alamat:</strong>
                                Jl. Gajah Mada No.2, RW.01, Jawa, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75242
                            </li>
                            <li>
                                <i class="fas fa-phone top-6"></i>
                                <strong class="text-dark">Telepon:</strong>
                                0541-733-333
                            </li>
                            <li>
                                <i class="fas fa-envelope top-6"></i>
                                <strong class="text-dark">Alamat Email:</strong>
                                <a href="mailto:diskominfo@kaltimprov.go.id">
                                    diskominfo@kaltimprov.go.id
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                        <h4 class="pt-5">Jam <strong>Operasional</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Senin - Jum'at - 9am hingga 5pm</li>
                            <li><i class="far fa-clock top-6"></i> Sabtu - 9am hingga 2pm</li>
                            <li><i class="far fa-clock top-6"></i> Minggu - Tutup</li>
                        </ul>
                    </div>

                    <h4 class="pt-5">Pusat <strong>Informasi</strong></h4>
                    <p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                </div>

            </div>

        </div>

    </div>

    @include('frontend.partials.footer')

    <!-- Google Maps -->
    <script>
        /* 
        Map Markers:
        - Get an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key
        - Generate Map Id: https://console.cloud.google.com/google/maps-apis/studio/maps
        - Use https://www.latlong.net/convert-address-to-lat-long.html to get Latitude and Longitude of a specific address
        */
        (g => {
            var h, a, k, p = "The Google Maps JavaScript API",
                c = "google",
                l = "importLibrary",
                q = "ib",
                m = document,
                b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}),
                r = new Set,
                e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = "https: //www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8914631195103!2d106.93186691476866!3d-6.145277795550636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zNsKwMDgnNDMuMCJTIDEwNsKwNTYnMDIuNiJF!5e0!3m2!1sen!2sid!4v1646897422557!5m2!1sen!2sid + e;"
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
        })
        ({
            key: "YOUR_API_KEY",
            v: "weekly"
        });
    </script>
</div>
@endsection