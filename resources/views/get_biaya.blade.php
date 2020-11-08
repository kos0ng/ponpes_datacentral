@extends('template')

@section('judul_halaman','Tambah Data')
     
@section('data_santri','active')

@section('konten')
     <div class="main-content" style="margin-left: 20%;width: 100%">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                         <strong>Pilih Kategori Biaya</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="/data_santri/update_getbiaya" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                {{ csrf_field() }}
                                            </div>
                                            @foreach($madrasah as $row)
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">{{$row->nama_lembaga}}</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    @php
                                        $data=DB::table('biaya')
                                        ->where('id_lembaga',$row->id_madrasah)
                                        ->orderBy('id_lembaga','DESC')
                                        ->orderBy('kategori','DESC')
                                        ->get();
                                        $arr=array('Santri Lama','Santri Baru');
                                                    @endphp
                                                    <select name="biaya_madrasah[]" class="form-control">
                                                    @foreach($data as $row2)
                                                    <option value="{{$row->id."-".$row2->id_biaya}}">{{ $row2->kategori." - Kelas ".$row2->sub_kategori }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select name="santri_baru[]" class="form-control" style="margin-top: 2%">
                                                    @for($i=0;$i<2;$i++)
                                                        <option value="{{$row->id."-".$i}}">{{ $arr[$i] }}</option>
                                                    @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            @endforeach
                                            @php
                                            $arr=array('Santri Lama','Santri Baru');
                                            @endphp
                                            @foreach($pondok as $row)
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">{{$row->nama_lembaga}}</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    @php
                                        $data=DB::table('biaya')->where('id_lembaga',$row->id_pondok)->orderBy('id_lembaga','DESC')->get();
                                                    @endphp
                                                    <select name="biaya_pondok[]" class="form-control">
                                                    @foreach($data as $row2)
                                                    <option value="{{$row->id."-".$row2->id_biaya}}">{{ $row2->kategori }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select name="santri_baru[]" class="form-control" style="margin-top: 2%">
                                                    @for($i=0;$i<2;$i++)
                                                        <option value="{{$row->id."-".$i}}" >{{ $arr[$i] }}</option>
                                                    @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            @endforeach
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                        <a href="{{route('list_group')}}"><button type="button" class="btn btn-success btn-sm">
                                            <i class="fa fa-ban"></i> Lewati
                                        </button></a>
                                    </div>
                                    </form>
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