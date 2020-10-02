@extends('template')

@section('judul_halaman','Profil Santri')
     
@section('data_santri','active')

@section('konten')
     <div class="main-content" style="margin-left: 5%;width: 100%">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header">
                                         <strong>Profil Santri</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        @foreach($santri as $s)
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <img src="{{asset('images/profile/'.$s->foto)}}" style="width: 80%;margin-left: 10%;margin-top: 8%">
                                                </div>
                                                <div class="col col-md-8">
                                                    <div class="row form-group" style="margin-top: 3%">
                                                        <div class="col col-md-12">
                                                            <label for="textarea-input" class=" form-control-label"><b>Nama</b></label>
                                                        </div>
                                                        <div class="col col-md-12">
                                                            <input type="text" name="nama_ayah" value="{{$s->nama}}" class="form-control" disabled="">
                                                        </div>
                                                        <div class="col col-md-12">
                                                            <label for="textarea-input" class=" form-control-label"><b>NIK</b></label>
                                                        </div>
                                                        <div class="col col-md-12">
                                                            <input type="text" name="nama_ayah" value="{{$s->nik}}" class="form-control" disabled="">
                                                        </div>
                                                        <div class="col col-md-12">
                                                            <label for="textarea-input" class=" form-control-label"><b>Tempat Lahir</b></label>
                                                        </div>
                                                        <div class="col col-md-12">
                                                            <input type="text" name="nama_ayah" value="{{$s->tempat_lahir}}" class="form-control" disabled="">
                                                        </div>
                                                        <div class="col col-md-12">
                                                            <label for="textarea-input" class=" form-control-label"><b>Tanggal Lahir</b></label>
                                                        </div>
                                                        <div class="col col-md-12">
                                                            <input type="text" name="nama_ayah" value="{{$s->tgl_lahir}}" class="form-control" disabled="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <label for="textarea-input" class=" form-control-label"><b>Alamat</b></label>
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <textarea name="alamat" id="textarea-input" rows="9" placeholder="Alamat" class="form-control" disabled>{{ $s->alamat }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <label for="textarea-input" class=" form-control-label"><b>Nama Ayah</b></label>
                                                </div>
                                                <div class="col col-md-6">
                                                    <label for="textarea-input" class=" form-control-label"><b>Nama Ibu</b></label>
                                                </div>
                                                <div class="col col-md-6">
                                                    <input type="text" name="nama_ayah" value="{{$s->nama_ayah}}" class="form-control" disabled="">
                                                </div>
                                                <div class="col col-md-6">
                                                    <input type="text" name="nama_ayah" value="{{$s->nama_ibu}}" class="form-control" disabled="">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <label class=" form-control-label"><b>Jenis Kelamin</b></label>
                                                </div>
                                                <div class="col col-md-6">
                                                    <label class=" form-control-label"><b>No Telepon</b></label>
                                                </div>
                                                <div class="col col-md-6">
                                                    <?php
                                                        if($s->jenis_kelamin == 'L'){
                                                            echo "<input type='text' class='form-control' disabled value='Laki-Laki'>";
                                                        }
                                                        else{
                                                            echo "<input type='text' class='form-control' disabled value='Perempuan'>";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="col col-md-6">
                                                    <input type="text" name="nama_ayah" value="{{$s->telp_1}}" class="form-control" disabled="">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <label for="select" class=" form-control-label"><b>Data Madrasah</b></label>
                                                </div>
                                                <div class="col-12 col-md-12 madrasahField">
                                                    <?php
                                                        $data_madrasah=DB::table('madrasah')->join('unit_lembaga', 'unit_lembaga.induk_lembaga', '=', 'madrasah.id_madrasah')->where('id_santri',$s->id_santri)->get();
                                                        $data_pondok=DB::table('pondok')->join('unit_lembaga', 'unit_lembaga.induk_lembaga', '=', 'pondok.id_pondok')->where('id_santri',$s->id_santri)->get();
                                                        if(count($data_madrasah)==0){
                                                    ?>
                                                        Tidak ada data madrasah
                                                    <?php
                                                        }
                                                        else{
                                                        ?>
                                                        <table class="table table-striped">
                                                    <thead class="thead-dark">
                                                            <tr>
                                                                <th>Madrasah</th>
                                                                <th>Tipe Santri</th>
                                                                <th>Tingkatan</th>
                                                                <th>Biaya PSB/DU</th>
                                                                <th>Paket 1</th>
                                                                <th>Paket 2</th>
                                                                <th>Paket 3</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                    @php 
                                                    $sum_v=array(0,0,0,0,0);
                                                    @endphp
                                                    @foreach ($data_madrasah as $row)
                                                    @php
                                                    if($row->id_biaya!=0){
                                                    $biaya=DB::table('biaya')->where('biaya.id_biaya',$row->id_biaya)->get();
                                                            if($row->sb==1){
                                                                $sum_h=0;
                                                                echo "<tr>";
                                                                echo "<td>".$row->nama_lembaga."</td>";
                                                                echo "<td>Santri Baru</td>";
                                                                echo "<td>".$biaya[0]->kategori." - Kelas ".$biaya[0]->sub_kategori."</td>";
                                                                echo "<td>".$biaya[0]->sb_psb."</td>";
                                                                $sum_h+=$biaya[0]->sb_psb;
                                                                $sum_v[0]+=$biaya[0]->sb_psb;
                                                                echo "<td>".$biaya[0]->sb_paket1."</td>";
                                                                $sum_h+=$biaya[0]->sb_paket1;
                                                                $sum_v[1]+=$biaya[0]->sb_paket1;
                                                                echo "<td>".$biaya[0]->sb_paket2."</td>";
                                                                $sum_h+=$biaya[0]->sb_paket2;
                                                                $sum_v[2]+=$biaya[0]->sb_paket2;
                                                                echo "<td>".$biaya[0]->sb_paket3."</td>";
                                                                $sum_h+=$biaya[0]->sb_paket3;
                                                                $sum_v[3]+=$biaya[0]->sb_paket3;
                                                                echo "<td>".$sum_h."</td>";
                                                                $sum_v[4]+=$sum_h;
                                                                echo "</tr>";
                                                            }
                                                            else{
                                                                $sum_h=0;
                                                                echo "<tr>";
                                                                echo "<td>".$row->nama_lembaga."</td>";
                                                                echo "<td>Santri Lama</td>";
                                                                echo "<td>".$biaya[0]->kategori." - Kelas ".$biaya[0]->sub_kategori."</td>";
                                                                echo "<td>".$biaya[0]->sl_du."</td>";
                                                                $sum_h+=$biaya[0]->sl_du;
                                                                $sum_v[0]+=$biaya[0]->sl_du;
                                                                echo "<td>".$biaya[0]->sl_paket1."</td>";
                                                                $sum_h+=$biaya[0]->sl_paket1;
                                                                $sum_v[1]+=$biaya[0]->sl_paket1;
                                                                echo "<td>".$biaya[0]->sl_paket2."</td>";
                                                                $sum_h+=$biaya[0]->sl_paket2;
                                                                $sum_v[2]+=$biaya[0]->sl_paket2;
                                                                echo "<td>".$biaya[0]->sl_paket3."</td>";
                                                                $sum_h+=$biaya[0]->sl_paket3;
                                                                $sum_v[3]+=$biaya[0]->sl_paket3;
                                                                echo "<td>".$sum_h."</td>";
                                                                $sum_v[4]+=$sum_h;
                                                                echo "</tr>";   
                                                            }
                                                        }
                                                    @endphp

                                                    <br>
                                                    @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="3" style="text-align: center">Jumlah</th>
                                                            <th>{{$sum_v[0]}}</th>
                                                            <th>{{$sum_v[1]}}</th>
                                                            <th>{{$sum_v[2]}}</th>
                                                            <th>{{$sum_v[3]}}</th>
                                                            <th>{{$sum_v[4]}}</th>
                                                        </tr>
                                                    </tfoot>
                                                    </table>
                                                        <?php
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <hr>
                                             <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <label for="select" class=" form-control-label"><b>Data Pondok</b></label>
                                                </div>
                                                <div class="col-12 col-md-12 pondokField">
                                                    <?php
                                                    if(count($data_pondok)==0){
                                                    echo "Tidak ada data pondok";
                                                    }
                                                    else{
                                                    ?>
                                                    <table class="table table-striped" style="margin-top: -2%">
                                                    <thead class="thead-dark">
                                                            <tr>
                                                                <th>Pondok</th>
                                                                <th>Tipe Santri</th>
                                                                <th>Kategori</th>
                                                                <th>Biaya PSB/DU</th>
                                                                <th>Paket 1</th>
                                                                <th>Paket 2</th>
                                                                <th>Paket 3</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                    @php 
                                                    $sum_v=array(0,0,0,0,0);
                                                    @endphp
                                                    @foreach ($data_pondok as $row)
                                                    @php
                                                    if($row->id_biaya!=0){
                                                    $biaya=DB::table('biaya')->where('biaya.id_biaya',$row->id_biaya)->get();
                                                            if($row->sb==1){
                                                                $sum_h=0;
                                                                echo "<tr>";
                                                                echo "<td>".$row->nama_lembaga."</td>";
                                                                echo "<td>Santri Baru</td>";
                                                                echo "<td>".$biaya[0]->kategori."</td>";
                                                                echo "<td>".$biaya[0]->sb_psb."</td>";
                                                                $sum_h+=$biaya[0]->sb_psb;
                                                                $sum_v[0]+=$biaya[0]->sb_psb;
                                                                echo "<td>".$biaya[0]->sb_paket1."</td>";
                                                                $sum_h+=$biaya[0]->sb_paket1;
                                                                $sum_v[1]+=$biaya[0]->sb_paket1;
                                                                echo "<td>".$biaya[0]->sb_paket2."</td>";
                                                                $sum_h+=$biaya[0]->sb_paket2;
                                                                $sum_v[2]+=$biaya[0]->sb_paket2;
                                                                echo "<td>".$biaya[0]->sb_paket3."</td>";
                                                                $sum_h+=$biaya[0]->sb_paket3;
                                                                $sum_v[3]+=$biaya[0]->sb_paket3;
                                                                echo "<td>".$sum_h."</td>";
                                                                $sum_v[4]+=$sum_h;
                                                                echo "</tr>";
                                                            }
                                                            else{
                                                                $sum_h=0;
                                                                echo "<tr>";
                                                                echo "<td>".$row->nama_lembaga."</td>";
                                                                echo "<td>Santri Lama</td>";
                                                                echo "<td>".$biaya[0]->kategori."</td>";
                                                                echo "<td>".$biaya[0]->sl_du."</td>";
                                                                $sum_h+=$biaya[0]->sl_du;
                                                                $sum_v[0]+=$biaya[0]->sl_du;
                                                                echo "<td>".$biaya[0]->sl_paket1."</td>";
                                                                $sum_h+=$biaya[0]->sl_paket1;
                                                                $sum_v[1]+=$biaya[0]->sl_paket1;
                                                                echo "<td>".$biaya[0]->sl_paket2."</td>";
                                                                $sum_h+=$biaya[0]->sl_paket2;
                                                                $sum_v[2]+=$biaya[0]->sl_paket2;
                                                                echo "<td>".$biaya[0]->sl_paket3."</td>";
                                                                $sum_h+=$biaya[0]->sl_paket3;
                                                                $sum_v[3]+=$biaya[0]->sl_paket3;
                                                                echo "<td>".$sum_h."</td>";
                                                                $sum_v[4]+=$sum_h;
                                                                echo "</tr>";   
                                                            }
                                                    }
                                                    @endphp

                                                    <br>
                                                    @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="3" style="text-align: center">Jumlah</th>
                                                            <th>{{$sum_v[0]}}</th>
                                                            <th>{{$sum_v[1]}}</th>
                                                            <th>{{$sum_v[2]}}</th>
                                                            <th>{{$sum_v[3]}}</th>
                                                            <th>{{$sum_v[4]}}</th>
                                                        </tr>
                                                    </tfoot>
                                                    </table>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                    </div>
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