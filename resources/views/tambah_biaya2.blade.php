@extends('template')

@section('judul_halaman','Tambah Data Pembayaran')
     
@section('data_pembayaran','active')

@section('konten')
     <div class="main-content" style="margin-left: 20%;width: 100%">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                         <strong>Tambah Data Pembayaran Madrasah</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="/data_santri/insert_biaya" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                {{ csrf_field() }}
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Lembaga</label>
                                                </div>
                                                <div class="col-9 col-md-9 madrasahField">
                                                    <select name="id_lembaga" id="select" style="width: 70%;height: 40px">
                                                        @foreach($lembaga as $row)
                                                            <option value="{{$row->induk_lembaga}}">{{$row->nama_lembaga}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kategori</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="kategori" placeholder="Nama Kategori" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sub_kategori" placeholder="Kelas" class="form-control">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <h5 for="email-input" class=" form-control-label">Santri Baru</h5>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">PSB</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sb_psb" placeholder="Biaya" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sb_paket1" placeholder="Biaya" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sb_paket2" placeholder="Biaya" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 3</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sb_paket3" placeholder="Biaya" class="form-control">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <h5 for="email-input" class=" form-control-label">Santri Lama</h5>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">DU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sl_du" placeholder="Biaya" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sl_paket1" placeholder="Biaya" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sl_paket2" placeholder="Biaya" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 3</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sl_paket3" placeholder="Biaya" class="form-control">
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
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
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