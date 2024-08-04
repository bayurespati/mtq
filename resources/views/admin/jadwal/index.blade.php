@extends('admin.layout.base')

@push('title')
<title>Admin View - Jadwal</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<section class="body">

    @include('admin.partials.header')

    <div class="inner-wrapper">
        @include('admin.partials.sidebar')

        <section role="main" class="content-body">
            <h2 style="color: black">Halaman Data Jadwal</h2>
            @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! \Session::get('success') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col">
                    <section class="card">
                        <header class="card-header">
                            <div class="card-actions">
                                <!-- <button class="btn btn-xs btn-primary">Create </button> -->
                                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            </div>
                            <h2 class="card-title">
                                Table Jadwal
                                <a href="{{ route('admin-jadwal-create') }}">
                                    <span class="btn btn-sm btn-primary">
                                        Create <i class="fas fa-plus"></i>
                                    </span>
                                </a>
                            </h2>
                        </header>
                        <div class="card-body">
                            <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Lokasi</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jadwal as $item)
                                    <tr>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->tanggal}}</td>
                                        <td>{{$item->lokasi}}</td>
                                        <td class="actions">
                                            <a <?php echo ("href=/jadwal/edit/" . $item->id) ?> class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection