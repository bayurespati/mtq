@extends('admin.layout.base')

@push('title')
<title>Admin View - Dashboard</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<section class="body">

    @include('admin.partials.header')

    <div class="inner-wrapper">
        @include('admin.partials.sidebar')

        <section role="main" class="content-body">
            <!-- start: page -->
            <div class="row">
                <div class="col-12">
                    @if(auth()->user()->role_id == 3)
                    Profil Peserta
                    @else
                    JADWAL PESERTA CONTENT
                    @endif
                </div>
            </div>
            <!-- end: page -->
        </section>
    </div>

</section>
@endsection