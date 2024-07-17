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
                    <h2 class="mb-2" style="font-weight: bold;">Gubernur Kaltim Buka Secara Resmi MTQ Ke-30 Tahun 2024</h2>
                    <div class="d-flex justify-content-start">
                        <p class="text-uppercase text-4 mb-3 text-color-default"><time pubdate datetime="2024-06-9"><i class="fas fa-calendar border-width-2 text-3"></i> Nov 19, 2024</time></p>
                        <p class="text-4 mb-3 text-color-default ms-4"><i class="fas fa-user border-width-2 text-3"></i> Donny Kusuma</p>
                        <p class="text-4 mb-3 text-color-default ms-4"><i class="fas fa-eye border-width-2 text-3"></i> 236</p>
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
                                    <img class="card-img-top rounded-0" src="/img/berita2.jpg" alt="Card Image">
                                </div>

                                <div class="card-body p-0">
                                    <p>
                                        MMCKalteng – Pangkalan Bun – Gubernur Kalimantan Tengah Sugianto Sabran secara resmi membuka Musabaqah Tilawatil Quran dan Hadits (MTQH) ke XXXI Tingkat Provinsi Kalimantan Tengah Tahun 2023, yang dipusatkan di Arena Utama Lapangan Sampuraga Kota Pangkalan Bun, Kabupaten Kotawaringin Barat, Minggu (19/11/2023) malam.
                                    </p>
                                    <p>
                                        Rangkaian acara pembukaan MTQH ke XXXI ini diawali dengan defile Khafilah dari 14 Kabupaten/Kota se Kalimantan Tengah, dilanjutkan dengan dan pembacaan Ayat Suci Al-Quran.
                                    </p>
                                    <p>
                                        Gubernur Kalteng Sugianto Sabran dalam sambutannya mengatakan, dengan rasa kebersamaan dan semangat Isen Mulang, penyelenggaraan MTQH ke XXXI Tingkat Prov. Kalteng Tahun 2023 ini akan dapat kita laksanakan bersama-sama dengan baik, lancar, dan sukses.
                                    </p>
                                    <p>
                                        “MTQH kali ini, tentunya menjadi sarana penting untuk mencetak generasi qur’ani Kalteng yang mampu berprestasi dan juga mengharumkan nama Bumi Tambun Bungai, Bumi Pancasila di ajang MTQ Nasional ke XXX di Kota Samarinda, yang dilaksanakan pada tahun 2024 mendatang” ucapnya.
                                    </p>
                                    <p>
                                        Selain itu, MTQH ke XXXI ini juga diharapkan dapat semakin menumbuhkan kecintaan terhadap Allah SWT dan sesama manusia, menjadi perekat di tengah keberagaman masyarakat Kalimantan Tengah, melalui Gaung Syiar Al-Qur’an yang Universal dan Islam Rahmatan Lil Alamin.
                                    </p>
                                    <p>
                                        “Perlu kita sadari bahwa, Bangsa Indonesia, termasuk masyarakat Kalimantan Tengah, sangat majemuk dan beragam, dengan latar belakang keyakinan, agama, suku, dan kultur budaya yang berbeda-beda” imbuhnya.
                                    </p>
                                    <p>
                                        Lebih lanjut Sugianto mengatakan, keberagaman itu harus dirawat dengan baik, dilandasi rasa kebersamaan, toleransi, dan saling menghormati, sehingga benar-benar menjadi anugerah dan kekuatan, untuk membangun kemajuan daerah dan kesejahteraan masyarakat Kalimantan Tengah, demi Kalteng Makin BERKAH (Bermartabat, Elok, Religius, Kuat, Amanah, dan Harmonis).
                                    </p>
                                    <p>
                                        Pada kesempatan yang sama Wagub Kalteng Edy Pratowo selaku Ketua Umum LPTQ Prov. Kalteng dalam laporanya menjelaskan, bahwa pelaksanaan MTQH ke XXXI tahun ini, sebagai media/wahana untuk mempersiapkan dan menyeleksi seluruh peserta yang nantinya akan mewakili Kafilah Kalimantan Tengah mengikuti MTQ Nasional ke XXX di Kota Samarinda, Provinsi Kalimantan Timur pada bulan September tahun 2024.
                                    </p>
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