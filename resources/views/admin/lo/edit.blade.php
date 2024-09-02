@extends('admin.layout.base')

@push('title')
<title>Admin View - Update LO</title>
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
                    <form id="form" <?php echo ("action=/lo/update/" . $lo->id) ?> method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <section class="card">
                            <header class="card-header">
                                <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                </div>
                                <h2 class="card-title">Form Input LO</h2>
                            </header>
                            <div class="card-body">
                                <!-- FORM -->
                                <div class="form-group row pb-3">
                                    <label class="col-sm-3 control-label text-sm-end pt-2">Nama<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ old('nama', $lo->user->nama) }}" name="nama" class="form-control" placeholder="Nama" required />
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-sm-3 control-label text-sm-end pt-2">Email<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="email" value="{{ old('email', $lo->user->email) }}" name="email" class="form-control" placeholder="Email" required />
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-sm-3 control-label text-sm-end pt-2">No Telpon<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ old('phone', $lo->user->phone) }}" name="phone" class="form-control" placeholder="Phone" required />
                                    </div>
                                </div>
                                <div class="form-group row pb-3">
                                    <label class="col-lg-3 control-label text-lg-end pt-2">SKPD<span class="required">*</label>
                                    <div class="col-lg-9">
                                        <select data-plugin-selectTwo class="form-control populate" name="skpd_id">
                                            @foreach($skpd as $item)
                                            <option value="{{$item->id}}" {{ ($item->skpd_id == $item->id) ? 'selected' : '' }}>{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <button class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-default" onClick="window.location.href='/lo'">Cancel</button>
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
<script>
</script>
@endsection