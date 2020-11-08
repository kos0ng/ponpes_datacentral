@extends('template')

@section('judul_halaman','Master Biaya')
     
@section('data_pembayaran','active')

@section('konten')
     <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Master Data Pembayaran</strong> 
                                    </div>
                                    <div class="card-body card-block">                                        
                                        <a href="{{ route('tambah_biaya') }}" class="btn btn-success my-3">Tambah Data Pondok</a>
                                        <a href="{{ route('tambah_biaya2') }}" class="btn btn-warning my-3">Tambah Data Madrasah</a>
                                        <table id="myTable" class="table table-striped" >  
                                           <thead>  
                                             <tr style="height: 20px; text-align: center;">
                <td rowspan="2" style="width: 15%; vertical-align: middle; font-weight: bold; padding: 0px; background: #b1fef2">Lembaga</td>
                <td rowspan="2" style="width: 10%; vertical-align: middle; font-weight: bold; padding: 0px; background: #b1fef2">Kategori</td>
                <td rowspan="2" style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #b1fef2">Kelas</td>
                <td colspan="5" style="vertical-align: middle; font-weight: bold; padding: 0px; background: #ffdd8e">Santri Baru (PSB)</td>
                <td colspan="5" style="vertical-align: middle; font-weight: bold; padding: 0px; background: #88ff94">Santri Lama (DU)</td>
                <td rowspan="2" style="width: 15%; vertical-align: middle; font-weight: bold; padding: 0px; background: #b1fef2">Action</td>
            </tr>
            <tr style="height: 20px; text-align: center;">
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #ffdd8e">PSB</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Paket 1</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #ffdd8e">Paket 2</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Paket 3</td>
                <td style="width: 8%; vertical-align: middle; font-weight: bold; padding: 0px; background: #ffdd8e">Jumlah</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #88ff94">Daftar Ulang</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Paket 1</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #88ff94">Paket 2</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Paket 3</td>
                <td style="width: 8%; vertical-align: middle; font-weight: bold; padding: 0px; background: #88ff94">Jumlah</td>
            </tr>
                                           </thead>  
                                           <tbody>  
                                             @php
                                                $i=1;
                                             @endphp
                                             @foreach($all as $row)
                                                <tr style="height: 20px">
                <td rowspan="1" style=" vertical-align: middle;padding: 0px;"><label style="padding-left: 10px">{{ $row->nama_lembaga }}</label></td>
                <td style=" vertical-align: middle;padding: 0px; text-align: left;">{{$row->kategori}}</td>
                <td style=" vertical-align: middle;padding: 0px; text-align: center;">
                    @php
                        $sum_sb=0;
                        $sum_sl=0;
                        if($row->sub_kategori==0){
                            echo "-";
                        }
                        else{
                            echo $row->sub_kategori;
                        }
                    @endphp
                </td>
                <td style=" vertical-align: middle;padding: 0px; text-align: right;background: #ffdd8e">{{number_format($row->sb_psb)}} </td>
                @php $sum_sb+=$row->sb_psb @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">{{number_format($row->sb_paket1)}} </td>
                @php $sum_sb+=$row->sb_paket1 @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;background: #ffdd8e">{{number_format($row->sb_paket2)}} </td>
                @php $sum_sb+=$row->sb_paket2 @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">{{number_format($row->sb_paket3)}} </td>
                @php $sum_sb+=$row->sb_paket3 @endphp
                <td style="background:#fac8ff; vertical-align: middle;padding: 0px; text-align: right;">{{number_format($sum_sb)}}</td>
                <td style=" vertical-align: middle;padding: 0px; text-align: right;background: #88ff94">{{number_format($row->sl_du)}} </td>
                @php $sum_sl+=$row->sl_du @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">{{number_format($row->sl_paket1)}} </td>
                @php $sum_sl+=$row->sl_paket1 @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;background: #88ff94">{{number_format($row->sl_paket2)}} </td>
                @php $sum_sl+=$row->sl_paket2 @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">{{number_format($row->sl_paket3)}} </td>
                @php $sum_sl+=$row->sl_paket3 @endphp
                <td style="background:#fac8ff; vertical-align: middle;padding: 0px; text-align: right;">{{number_format($sum_sl)}}</td>     
                <td>
                    <a href="{{ route('edit_biaya',['id_biaya'=>$row->id_biaya]) }}"><button class="btn btn-warning">Edit</button></a>
                    <button class="btn btn-danger" onclick="deleteBiaya({{$row->id_biaya}})">
                                                        Hapus
                                                    </button>
                </td>
                                                </tr>
                                                @php
                                                    $i++;
                                                @endphp
                                             @endforeach
                                           </tbody>  
                                         </table>  
                                    </div>
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