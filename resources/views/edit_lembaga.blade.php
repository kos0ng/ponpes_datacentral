@extends('template')

@section('judul_halaman','Edit Lembaga')
     
@section('data_lembaga','active')

@section('konten')
     <div class="main-content" style="margin-left: 20%;width: 100%">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                         <strong>Edit Data Lembaga</strong> 
                                    </div>
                                    <form action="/data_santri/update_lembaga" method="post" class="form-horizontal">
                                            {{ csrf_field() }}
                                    <div class="card-body card-block">
                                        @foreach($lembaga as $s)
                                            <input type="hidden" id="text-input" name="induk_lembaga" class="form-control" value="{{ $s->induk_lembaga }}">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Lembaga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama_lembaga" placeholder="Nama Lembaga" class="form-control" value="{{ $s->nama_lembaga }}">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Hari Efektif</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="hari_efektif" placeholder="Hari Efektif" class="form-control" value="{{ $s->hari_efektif }}">
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