@extends('template')

@section('judul_halaman','Rekapitulasi Biaya')
     
@section('data_pembayaran','active')

@section('konten')
     <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Rekapitulasi Data Pembayaran</strong> 
                                    </div>
                                    <div class="card-body card-block">                            
                                        <table id="myTable" class="table table-striped" >  
                                           <thead>  
                                             <tr style="height: 20px; text-align: center;">
                <td rowspan="2" style="width: 15%; vertical-align: middle; font-weight: bold; padding: 0px; background: #b1fef2">Lembaga</td>
                <td rowspan="2" style="width: 10%; vertical-align: middle; font-weight: bold; padding: 0px; background: #b1fef2">Kategori</td>
                <td rowspan="2" style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #b1fef2">Kelas</td>
                <td colspan="5" style="vertical-align: middle; font-weight: bold; padding: 0px; background: #ffdd8e">Santri Baru (PSB)</td>
                <td colspan="5" style="vertical-align: middle; font-weight: bold; padding: 0px; background: #88ff94">Santri Lama (DU)</td>
            </tr>
            <tr style="height: 20px; text-align: center;">
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">PSB</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Paket 1</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Paket 2</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Paket 3</td>
                <td style="width: 8%; vertical-align: middle; font-weight: bold; padding: 0px; background: #ffdd8e">Jumlah</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Daftar Ulang</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Paket 1</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Paket 2</td>
                <td style="width: 5%; vertical-align: middle; font-weight: bold; padding: 0px; background: #e4e4e0">Paket 3</td>
                <td style="width: 8%; vertical-align: middle; font-weight: bold; padding: 0px; background: #88ff94">Jumlah</td>
            </tr>
                                           </thead>  
                                           <tbody>  
                                             @php
                                                $i=1;
                                             @endphp
                                             @foreach($all as $row)
                                             @php
                        if($row->id_lembaga>50){
                            $tipe='madrasah';
                        }
                        else{
                            $tipe='pondok';
                        }
                        $total_sb=DB::table($tipe)->where(['id_biaya'=>$row->id_biaya,'sb'=>1])->count();
                        $sb_paket0=DB::table($tipe)->where(['id_biaya'=>$row->id_biaya,'paket0'=>1,'sb'=>1])->count();
                        $sb_paket1=DB::table($tipe)->where(['id_biaya'=>$row->id_biaya,'paket1'=>1,'sb'=>1])->count();
                        $sb_paket2=DB::table($tipe)->where(['id_biaya'=>$row->id_biaya,'paket2'=>1,'sb'=>1])->count();
                        $sb_paket3=DB::table($tipe)->where(['id_biaya'=>$row->id_biaya,'paket3'=>1,'sb'=>1])->count();
                        $total_sl=DB::table($tipe)->where(['id_biaya'=>$row->id_biaya,'sb'=>0])->count();
                        $sl_paket0=DB::table($tipe)->where(['id_biaya'=>$row->id_biaya,'paket0'=>1,'sb'=>0])->count();
                        $sl_paket1=DB::table($tipe)->where(['id_biaya'=>$row->id_biaya,'paket1'=>1,'sb'=>0])->count();
                        $sl_paket2=DB::table($tipe)->where(['id_biaya'=>$row->id_biaya,'paket2'=>1,'sb'=>0])->count();
                        $sl_paket3=DB::table($tipe)->where(['id_biaya'=>$row->id_biaya,'paket3'=>1,'sb'=>0])->count();
                                             @endphp
                                                <tr style="height: 20px">
                <td rowspan="1" style=" vertical-align: middle;padding: 0px;"><label style="padding-left: 10px">{{ $row->nama_lembaga }}</label></td>
                <td style=" vertical-align: middle;padding: 0px; text-align: left;">{{$row->kategori}} <br> SB : {{$total_sb}}<br>SL : {{$total_sl}}</td>
                <td style=" vertical-align: middle;padding: 0px; text-align: center;">
                    @php
                        $sum_sb=0;
                        $sum_sb2=0;
                        $sum_sl=0;
                        $sum_sl2=0;
                        if($row->sub_kategori==0){
                            echo "-";
                        }
                        else{
                            echo $row->sub_kategori;
                        }
                    @endphp
                </td>
                @php
                $tmp=$row->sb_psb*$sb_paket0;
                $tmp2=$row->sb_psb*($total_sb-$sb_paket0);
                $sum_sb+=$tmp;
                $sum_sb2+=$tmp2;
                @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">
                <span style="color: red">{{number_format($tmp2)}}</span><br>
                <span style="color: green">{{number_format($tmp)}}</span>
                </td>
                @php
                $tmp=$row->sb_paket1*$sb_paket1;
                $tmp2=$row->sb_paket1*($total_sb-$sb_paket1);
                $sum_sb+=$tmp;
                $sum_sb2+=$tmp2;
                @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">
                <span style="color: red">{{number_format($tmp2)}}</span><br>
                <span style="color: green">{{number_format($tmp)}}</span>
                </td>
                @php
                $tmp=$row->sb_paket2*$sb_paket2;
                $tmp2=$row->sb_paket2*($total_sb-$sb_paket2);
                $sum_sb+=$tmp;
                $sum_sb2+=$tmp2;
                @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">
                <span style="color: red">{{number_format($tmp2)}}</span><br>
                <span style="color: green">{{number_format($tmp)}}</span>
                </td>
                @php
                $tmp=$row->sb_paket3*$sb_paket3;
                $tmp2=$row->sb_paket3*($total_sb-$sb_paket3);
                $sum_sb+=$tmp;
                $sum_sb2+=$tmp2;
                @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">
                <span style="color: red">{{number_format($tmp2)}}</span><br>
                <span style="color: green">{{number_format($tmp)}}</span>
                </td>
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">
                <span style="color: red">{{number_format($sum_sb2)}}</span><br>
                <span style="color: green">{{number_format($sum_sb)}}</span>
                </td>
                @php
                $tmp=$row->sl_du*$sl_paket0;
                $tmp2=$row->sl_du*($total_sl-$sl_paket0);
                $sum_sl+=$tmp;
                $sum_sl2+=$tmp2;
                @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">
                <span style="color: red">{{number_format($tmp2)}}</span><br>
                <span style="color: green">{{number_format($tmp)}}</span>
                </td>
                @php
                $tmp=$row->sl_paket1*$sl_paket1;
                $tmp2=$row->sl_paket1*($total_sl-$sl_paket1);
                $sum_sl+=$tmp;
                $sum_sl2+=$tmp2;
                @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">
                <span style="color: red">{{number_format($tmp2)}}</span><br>
                <span style="color: green">{{number_format($tmp)}}</span>
                </td>
                @php
                $tmp=$row->sl_paket2*$sl_paket2;
                $tmp2=$row->sl_paket2*($total_sl-$sl_paket2);
                $sum_sl+=$tmp;
                $sum_sl2+=$tmp2;
                @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">
                <span style="color: red">{{number_format($tmp2)}}</span><br>
                <span style="color: green">{{number_format($tmp)}}</span>
                </td>
                @php
                $tmp=$row->sl_paket3*$sl_paket3;
                $tmp2=$row->sl_paket3*($total_sl-$sl_paket3);
                $sum_sl+=$tmp;
                $sum_sl2+=$tmp2;
                @endphp
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">
                <span style="color: red">{{number_format($tmp2)}}</span><br>
                <span style="color: green">{{number_format($tmp)}}</span>
                </td>
                <td style=" vertical-align: middle;padding: 0px; text-align: right;">
                <span style="color: red">{{number_format($sum_sl2)}}</span><br>
                <span style="color: green">{{number_format($sum_sl)}}</span>
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