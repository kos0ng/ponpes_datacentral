@extends('template')

@section('judul_halaman','Update Pembayaran')
     
@section('data_santri','active')

@section('konten')
     <div class="main-content" style="margin-left: 20%;width: 100%">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                         <strong>Update Status Pembayaran</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                            @foreach($madrasah as $row)
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label" style="margin-top: 75%"><b>{{$row->nama_lembaga}}</b></label>
                                                </div>
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label" style="margin-top: 15%">
                                                        @php
                                                            $arr=array('Belum Bayar','Sudah Bayar');
                                                            if($row->sb==0){
                                                                echo "DU";
                                                            }
                                                            else{
                                                                echo "PSB";
                                                            }
                                                        @endphp
                                                    </label><br>
                                                    <label for="text-input" class=" form-control-label" style="margin-top: 10%">
                                                        Paket 1
                                                    </label><br>
                                                    <label for="text-input" class=" form-control-label" style="margin-top: 10%">
                                                        Paket 2
                                                    </label><br>
                                                    <label for="text-input" class=" form-control-label" style="margin-top: 10%">
                                                        Paket 3
                                                    </label>
                                                </div>
                                                @php
                                                if($row->id_biaya==0){
                                                    @endphp
                                                    <div class="col-12 col-md-6" style="margin-top: 15%">
                                                        Belum Memilih Kategori
                                                    </div>
                                                    @php
                                                }else{
                                                @endphp
                                                <div class="col-12 col-md-6">
                                                    <form action="/data_santri/update_pembayaran" method="POST">
                                                        <input type="hidden" name="id" value="{{$row->id}}">
                                                    <div class="row form-group">
                                                        {{ csrf_field() }}
                                                    </div>
                                                    <select name="paket0" class="form-control" >
                                                    @for($i=0;$i<2;$i++)
                                                    <option value="{{$i}}" {{ (  $row->paket0 == $i) ? 'selected' : '' }}> {{ $arr[$i]  }}</option>
                                                    @endfor
                                                    </select>
                                                    <select name="paket1" class="form-control" style="margin-top: 2%">
                                                    @for($i=0;$i<2;$i++)
                                                    <option value="{{$i}}" {{ (  $row->paket1 == $i) ? 'selected' : '' }}> {{ $arr[$i]  }}</option>
                                                    @endfor
                                                    </select>
                                                    <select name="paket2" class="form-control" style="margin-top: 2%">
                                                    @for($i=0;$i<2;$i++)
                                                    <option value="{{$i}}" {{ (  $row->paket2 == $i) ? 'selected' : '' }}> {{ $arr[$i]  }}</option>
                                                    @endfor
                                                    </select>
                                                    <select name="paket3" class="form-control" style="margin-top: 2%">
                                                    @for($i=0;$i<2;$i++)
                                                    <option value="{{$i}}" {{ (  $row->paket3 == $i) ? 'selected' : '' }}> {{ $arr[$i]  }}</option>
                                                    @endfor
                                                    </select>
                                                    <button type="submit" class="btn btn-success btn-sm" style="margin-top: 2%">Update</button>
                                                    <button type="reset" class="btn btn-danger btn-sm" style="margin-top: 2%">
                                                    <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                    </form>
                                                </div>
                                                @php
                                            }
                                                @endphp
                                            </div>
                                            <hr>
                                            @endforeach
                                             @foreach($pondok as $row)

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label" style="margin-top: 75%"><b>{{$row->nama_lembaga}}</b></label>
                                                </div>
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label" style="margin-top: 15%">
                                                        @php
                                                            $arr=array('Belum Bayar','Sudah Bayar');
                                                            if($row->sb==0){
                                                                echo "DU";
                                                            }
                                                            else{
                                                                echo "PSB";
                                                            }
                                                        @endphp
                                                    </label><br>
                                                    <label for="text-input" class=" form-control-label" style="margin-top: 10%">
                                                        Paket 1
                                                    </label><br>
                                                    <label for="text-input" class=" form-control-label" style="margin-top: 10%">
                                                        Paket 2
                                                    </label><br>
                                                    <label for="text-input" class=" form-control-label" style="margin-top: 10%">
                                                        Paket 3
                                                    </label>
                                                </div>
                                                @php
                                                if($row->id_biaya==0){
                                                    @endphp
                                                    <div class="col-12 col-md-6" style="margin-top: 15%">
                                                        Belum Memilih Kategori
                                                    </div>
                                                    @php
                                                }else{
                                                @endphp
                                                <div class="col-12 col-md-6">
                                                    <form action="/data_santri/update_pembayaran" method="POST">
                                                        <input type="hidden" name="id" value="{{$row->id}}">
                                                    <div class="row form-group">
                                                        {{ csrf_field() }}
                                                    </div>
                                                    <select name="paket0" class="form-control" >
                                                    @for($i=0;$i<2;$i++)
                                                    <option value="{{$i}}" {{ (  $row->paket0 == $i) ? 'selected' : '' }}> {{ $arr[$i]  }}</option>
                                                    @endfor
                                                    </select>
                                                    <select name="paket1" class="form-control" style="margin-top: 2%">
                                                    @for($i=0;$i<2;$i++)
                                                    <option value="{{$i}}" {{ (  $row->paket1 == $i) ? 'selected' : '' }}> {{ $arr[$i]  }}</option>
                                                    @endfor
                                                    </select>
                                                    <select name="paket2" class="form-control" style="margin-top: 2%">
                                                    @for($i=0;$i<2;$i++)
                                                    <option value="{{$i}}" {{ (  $row->paket2 == $i) ? 'selected' : '' }}> {{ $arr[$i]  }}</option>
                                                    @endfor
                                                    </select>
                                                    <select name="paket3" class="form-control" style="margin-top: 2%">
                                                    @for($i=0;$i<2;$i++)
                                                    <option value="{{$i}}" {{ (  $row->paket3 == $i) ? 'selected' : '' }}> {{ $arr[$i]  }}</option>
                                                    @endfor
                                                    </select>
                                                    <button type="submit" class="btn btn-success btn-sm" style="margin-top: 2%">Update</button>
                                                    <button type="reset" class="btn btn-danger btn-sm" style="margin-top: 2%">
                                                    <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                    </form>
                                                </div>
                                                @php
                                            }
                                                @endphp
                                            </div>
                                            <hr>
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