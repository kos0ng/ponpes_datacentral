@extends('template')

@section('judul_halaman','Tambah Data')
     
@section('data_pembayaran','active')

@section('konten')
     <div class="main-content" style="margin-left: 20%;width: 100%">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                         <strong>Edit Data Pembayaran</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        @foreach($biaya as $row)
                                        <form action="/data_santri/update_biaya" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                {{ csrf_field() }}
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Lembaga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    {{-- <input type="hidden" name="kategori" value="0083"> --}}
                                                    <input type="hidden" id="text-input" name="id_biaya" placeholder="Nama Kategori" class="form-control" value="{{$row->id_biaya}}">
                                                    <select name="id_lembaga" class="form-control">
                                    @foreach ($unit_lembaga as $u)
            <option value="{{ $u->induk_lembaga }}" {{ ( $u->induk_lembaga == $row->id_lembaga) ? 'selected' : '' }}> {{ $u->nama_lembaga }} </option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kategori</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    {{-- <input type="hidden" name="kategori" value="0083"> --}}
                                                    <input type="text" id="text-input" name="kategori" placeholder="Nama Kategori" class="form-control" value="{{$row->kategori}}">
                                                </div>
                                            </div>                                            
                                            @php
                                            if($row->id_lembaga>50){
                                                @endphp
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="sub_kategori" placeholder="Kelas" class="form-control" value="{{$row->sub_kategori}}">
                                                </div>
                                            </div>
                                                @php
                                            }
                                            @endphp
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
                                                    <input type="number" id="text-input" name="sb_psb" placeholder="Biaya" class="form-control" value="{{$row->sb_psb}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sb_paket1" placeholder="Biaya" class="form-control" value="{{$row->sb_paket1}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sb_paket2" placeholder="Biaya" class="form-control" value="{{$row->sb_paket2}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 3</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sb_paket3" placeholder="Biaya" class="form-control" value="{{$row->sb_paket3}}">
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
                                                    <input type="number" id="text-input" name="sl_du" placeholder="Biaya" class="form-control" value="{{$row->sl_du}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sl_paket1" placeholder="Biaya" class="form-control" value="{{$row->sl_paket1}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sl_paket2" placeholder="Biaya" class="form-control" value="{{$row->sl_paket2}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Paket 3</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="sl_paket3" placeholder="Biaya" class="form-control" value="{{$row->sl_paket3}}">
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