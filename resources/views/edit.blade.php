@extends('template')

@section('judul_halaman','Tambah Data')
     
@section('data_santri','active')

@section('konten')
     <div class="main-content" style="margin-left: 10%;width: 100%">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-header">
                                         <strong>Edit Data Santri</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        @foreach($santri as $s)
                                        <form action="/data_santri/update" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            {{ csrf_field() }}
                                            <input type="hidden" id="text-input" name="id_santri" class="form-control" value="{{ $s->id_santri }}">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="hidden" name="induk_pusat" value="0083">
                                                    <input type="text" id="text-input" name="nama" placeholder="Nama Santri" class="form-control" value="{{ $s->nama }}">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">NIK</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="nik" placeholder="NIK" class="form-control" value="{{ $s->nik }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Tempat Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input" name="tempat_lahir" placeholder="Tempat Lahor" class="form-control" value="{{ $s->tempat_lahir }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="tgl_lahir" class="form-control" value="{{ $s->tgl_lahir }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="alamat" id="textarea-input" rows="9" placeholder="Alamat" class="form-control">{{ $s->alamat }}</textarea>
                                                </div>
                                            </div>
                                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="jenis_kelamin" value="L" class="form-check-input" {{ $s->jenis_kelamin == 'L' ? 'checked' : '' }}>Laki-Laki
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="radio2" name="jenis_kelamin" value="P" class="form-check-input" {{ $s->jenis_kelamin == 'P' ? 'checked' : '' }}>Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label"></label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <img src="{{asset('images/profile/'.$s->foto)}}" style="width: 15%">
                                                </div>
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Foto</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="email-input" name="foto" placeholder="Foto" class="form-control">
                                                </div>
                                            </div>
                                              <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tanggal Masuk</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <input type="date" id="text-input" name="tgl_masuk" class="form-control" value="{{ $s->tgl_masuk }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tanggal Keluar</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <input type="date" id="text-input" name="tgl_keluar" class="form-control" value="{{ $s->tgl_keluar }}">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Ayah</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama_ayah" placeholder="Nama Ayah" class="form-control" value="{{ $s->nama_ayah }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Alamat Ayah</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea class="form-control" name="alamat_ayah">{{ $s->alamat_ayah }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Ibu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama_ibu" placeholder="Nama Ibu" class="form-control" value="{{ $s->nama_ibu }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Alamat Ibu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea class="form-control" name="alamat_ibu">{{ $s->alamat_ibu }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nomor HP Orang Tua</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="telp_1" placeholder="Nomor HP" class="form-control" value="{{ $s->telp_1 }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Madrasah</label>
                                                </div>
                                                <div class="col-9 col-md-9 madrasahField">
                                                    <?php
                                                        $data_madrasah=DB::table('madrasah')->where('id_santri',$s->id_santri)->select('id', 'id_madrasah')->get();
                                                        $data_pondok=DB::table('pondok')->where('id_santri',$s->id_santri)->select('id_pondok','id')->get();
                                                        if(count($data_madrasah)==0){
                                                    ?>
                                                    <select name="id_madrasah[]" id="select" style="width: 70%;height: 40px;margin-top: 2%">
                                                       @foreach ($unit_madrasah as $u)
            <option value="{{ $u->induk_lembaga }}" {{ ( $u->induk_lembaga == 50) ? 'selected' : '' }}> {{ $u->nama_lembaga }} </option>
                                                    @endforeach
                                                    </select>
                                                    <?php
                                                        }
                                                        else{
                                                    ?>
                                                    @foreach ($data_madrasah as $row2)
                                                    <select name="id_madrasah[]" id="select" style="width: 70%;height: 40px;margin-top: 2%">
                                                       @foreach ($unit_madrasah as $u)
            <option value="{{ $row2->id.'-'.$u->induk_lembaga }}" {{ ( $u->induk_lembaga == $row2->id_madrasah) ? 'selected' : '' }}> {{ $u->nama_lembaga }} </option>
                                                    @endforeach
                                                    </select>
                                                    @endforeach
                                                    <?php
                                                        }
                                                    ?>
                                                    <button type="button" class="btn btn-success addMadrasah" style="margin-left: 1%">Add More</button>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Pondok</label>
                                                </div>
                                                <div class="col-9 col-md-9 pondokField">
                                                    <?php
                                                    if(count($data_pondok)==0){
                                                        ?>
                                                        <select name="id_pondok[]" id="select" style="width: 70%;height: 40px;margin-top: 2%">
                                                       @foreach ($unit_pondok as $u)
            <option value="{{ $u->induk_lembaga }}" {{ ( $u->induk_lembaga == 10) ? 'selected' : '' }}> {{ $u->nama_lembaga }} </option>
                                                        @endforeach
                                                    </select>
                                                        <?php
                                                    }
                                                    else{
                                                    ?>
                                                    @foreach ($data_pondok as $row2)
                                                    <select name="id_pondok[]" id="select" style="width: 70%;height: 40px;margin-top: 2%">
                                                       @foreach ($unit_pondok as $u)
            <option value="{{ $row2->id.'-'.$u->induk_lembaga }}" {{ ( $u->induk_lembaga == $row2->id_pondok) ? 'selected' : '' }}> {{ $u->nama_lembaga }} </option>
                                                        @endforeach
                                                    </select>
                                                    @endforeach
                                                    <?php
                                                    }
                                                    ?>
                                                    <button type="button" class="btn btn-success addPondok" style="margin-left: 1%">Add More</button>
                                                </div>
                                            </div>
                                       {{--      <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Unit Lembaga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="induk_lembaga" id="select" class="form-control">
                                                    @foreach ($unit_lembaga as $u)
            <option value="{{ $u->induk_lembaga }}" {{ ( $u->induk_lembaga == $s->induk_lembaga) ? 'selected' : '' }}> {{ $u->nama_lembaga }} </option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div> --}}
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
                       {{--  <div class="row">
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