@extends('template')

@section('judul_halaman','Tambah Data')
     
@section('data_absensi','active')

@section('konten')
     <div class="main-content" style="margin-left: 20%;width: 100%">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                         <strong>Edit Absen Santri</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        @foreach($absen as $s)
                                        <form action="/data_santri/update_absen" method="post" class="form-horizontal">
                                            {{ csrf_field() }}
                                            <input type="hidden" id="text-input" name="id_santri" class="form-control" value="{{ $s->id_santri }}">
                                            <input type="hidden" id="text-input" name="id_lembaga" class="form-control" value="{{ $s->id_lembaga }}">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="hidden" name="induk_pusat" value="0083">
                                                    <input type="text" id="text-input" name="nama" placeholder="Nama Santri" class="form-control" value="{{ $s->nama }}" disabled>
                                                    <input type="hidden" id="text-input" name="id_absen" class="form-control" value="{{ $s->id_absen }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Hadir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="email-input" name="hadir" class="form-control" value="{{ $s->hadir }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Izin</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="email-input" name="izin" class="form-control" value="{{ $s->izin }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Sakit</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="email-input" name="sakit" class="form-control" value="{{ $s->sakit }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Alpa</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="email-input" name="alpa" class="form-control" value="{{ $s->alpa }}">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    {{--     <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection