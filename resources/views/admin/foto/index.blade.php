@extends('admin.layout.base')

@push('title')
<title>Admin View - Berita Terkini</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<section class="body">

    @include('admin.partials.header')

    <div class="inner-wrapper">
        @include('admin.partials.sidebar')

        <section role="main" class="content-body">
            <h2 style="color: black">Halaman Data Berita Terkini</h2>
            @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! \Session::get('success') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true" aria-label="Close"></button>
            </div>
            @endif
            <section class="media-gallery">
                <div>
                    <a href="{{ route('admin-foto-create') }}">
                        <div class="btn btn-sm btn-primary">Create <i class="fas fa-plus"></i></div>
                    </a>
                </div>
                <div class="content-with-menu-container">
                    <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
                        @foreach($foto as $item)
                        <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
                            <div class="thumbnail">
                                <div class="thumb-preview">
                                    <a class="thumb-image" href="{{$item->url}}">
                                        <img src="/storage/{{$item->url}}" class="img-fluid" alt="Project">
                                    </a>
                                    <div class="mg-thumb-options">
                                        <div class="mg-zoom"><i class="bx bx-search"></i></div>
                                        <div class="mg-toolbar">
                                            <div class="mg-option checkbox-custom checkbox-inline">
                                            </div>
                                            <div class="mg-group float-end">
                                                <a <?php echo ("href=/foto/delete/" . $item->id) ?>><i class="far fa-trash-alt"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mg-description" style="margin-top: 6px;">
                                    <small class="float-start text-muted">{{$item->nama}}</small>
                                    <small class="float-end text-muted">{{$item->created_at}}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </section>
        </section>
    </div>
</section>
@endsection