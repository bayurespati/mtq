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
                <div class="col-lg-12">
                    <form id="form" action="{{ route('admin-jadwal-store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <section class="card">
                            <header class="card-header">
                                <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                </div>
                                <h2 class="card-title">Form Input Jadwal</h2>
                            </header>

                            <div class="card-body">
                                <div class="form-group row pb-3">
                                    <label class="col-lg-3 control-label text-lg-end pt-2">Tanggal<span class="required">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                            <input type="text" name="tanggal" data-plugin-datepicker data-plugin-skin="primary" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-lg-3 control-label text-lg-end pt-2">Lomba<span class="required">*</label>
                                    <div class="col-lg-9">
                                        <select data-plugin-selectTwo class="form-control populate" name="lomba_id">
                                            <option value="">Pilih Lomba</option>
                                            @foreach($lomba as $item)
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-lg-3 control-label text-lg-end pt-2">Jam Mulai <span class="required">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="far fa-clock"></i>
                                            </span>
                                            <input type="text" name="jam_mulai" data-plugin-timepicker data-plugin-options='{ "showMeridian": false }' class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-lg-3 control-label text-lg-end pt-2">Jam Selesai <span class="required">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="far fa-clock"></i>
                                            </span>
                                            <input type="text" name="jam_selesai" data-plugin-timepicker data-plugin-options='{ "showMeridian": false }' class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <footer class="card-footer">
                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <button class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-default" onClick="window.location.href='/jadwal'">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </form>

                    @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 10px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
            </div>
            <!-- end: page -->
        </section>
    </div>
</section>
@endsection