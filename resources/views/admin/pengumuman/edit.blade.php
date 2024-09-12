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
                    <form id="form" <?php echo ("action=/pengumuman/update/" . $pengumuman->id) ?> method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <section class="card">
                            <header class="card-header">
                                <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                </div>
                                <h2 class="card-title">Form Input Pengumuman</h2>
                            </header>
                            <div class="card-body">
                                <div class="form-group row pb-3">
                                    <label class="col-sm-3 control-label text-sm-end pt-2">Judul <span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input value="{{ old('judul', $pengumuman->judul) }}" type="text" name="judul" class="form-control" placeholder="Judul" required />
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-sm-3 control-label text-sm-end pt-2">Penulis <span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input value="{{ old('author', $pengumuman->author) }}" type="text" name="author" class="form-control" placeholder="Penulis" required />
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-lg-3 control-label text-lg-end pt-2">Tanggal<span class="required">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                            <input value="{{ old('tanggal', $pengumuman->tanggal_edit) }}" type="text" name="tanggal" data-plugin-datepicker class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-sm-3 control-label text-sm-end pt-2">Foto <span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="form-control" />
                                        <a href="/{{$pengumuman->image}}">View Image</a>
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-lg-3 control-label text-lg-end pt-2">Deskripsi<span class="required">*</span></label>
                                    <div class="col-lg-9">
                                        <textarea value="{{old('deskripsi')}}" name="deskripsi" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180 }'>{{$pengumuman->deskripsi}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-lg-3 control-label text-lg-end pt-2">Featured</label>
                                    <div class="col-lg-9">
                                        <div class="switch switch-sm switch-info">
                                            <input type="checkbox" name="is_featured" data-plugin-ios-switch <?php echo ($pengumuman->is_featured == 1 ? "Checked" : "") ?> />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <footer class="card-footer">
                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <button class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-default" onClick="window.location.href='/pengumuman'">
                                            Cancel
                                        </button>
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
                    @if (\Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 10px;">
                        {!! \Session::get('error') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
            </div>
            <!-- end: page -->
        </section>
    </div>
</section>
<script>
</script>
@endsection