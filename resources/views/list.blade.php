@extends('template')

@section('judul_halaman','List Data')
     
@section('data_santri','active')

@section('konten')
     <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Data Santri {{ $nama_lembaga[0]->nama_lembaga }}</strong> 
                                    </div>
                                    <div class="card-body card-block">                                        
                                        <a href="{{ route('export_excel',['id_lembaga'=>$id_lembaga]) }}" class="btn btn-success my-3" target="_blank" style="float: left;">EXPORT EXCEL</a>
                                        <form style="margin-top: 2%" action="{{route('update_kategori')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id_lembaga" value="{{$id_lembaga}}">
                                            <input type="submit" name="submit" value="Update" class="btn btn-primary" style="float: right;">
                                            <select class="form-control" style="width: 15%;float: right;margin-right: 2%" name="to_id">
                                                @foreach($biaya as $row)
                                                @php
                                                if($id_lembaga>50){
                                                @endphp
                                                <option value="{{$row->id_biaya}}">{{$row->kategori." - ".$row->sub_kategori}}</option>
                                                @php    
                                                }
                                                else{
                                                @endphp
                                                <option value="{{$row->id_biaya}}">{{$row->kategori}}</option>
                                                @php
                                                }
                                                @endphp
                                                @endforeach
                                            </select>
                                            <h4 style="float: right;margin-right: 2%;margin-top: 0.5%">To</h4>
                                           <select class="form-control" style="width: 15%;float: right;margin-right: 2%" name="from_id">
                                                @foreach($biaya as $row)
                                                @php
                                                if($id_lembaga>50){
                                                @endphp
                                                <option value="{{$row->id_biaya}}">{{$row->kategori." - ".$row->sub_kategori}}</option>
                                                @php    
                                                }
                                                else{
                                                @endphp
                                                <option value="{{$row->id_biaya}}">{{$row->kategori}}</option>
                                                @php
                                                }
                                                @endphp
                                                @endforeach
                                            </select>
                                            <h4 style="float: right;margin-right: 2%;margin-top: 0.5%">Mass Update</h4>
                                        </form>
                                        <table id="myTable" class="table table-striped">  
                                           <thead>  
                                             <tr>  
                                               <th style="width: 5%">NIPS</th>  
                                               <th>Nama</th>  
                                               {{-- <th>Asal</th>   --}}
                                               <th style="width: 1%">JK</th>
                                               <th>Pondok</th>
                                               <th>Madrasah</th>
                                               <th style="width: 15%">Kategori</th>
                                               <th>Action</th>
                                             </tr>  
                                           </thead>  
                                           <tbody>  
                                             @foreach($all as $row)
                                             <tr>  
                                                <td>{{ $row->id_santri }}</td>
                                                <td>{{ $row->nama }}</td>
                                                {{-- <td>{{ $row->tempat_lahir }}</td> --}}
                                                <td>{{ $row->jenis_kelamin }}</td>
                                                <td>
                                                    <?php
                                                    $data_pondok=DB::table('pondok')->join('unit_lembaga', 'unit_lembaga.induk_lembaga', '=', 'pondok.id_pondok')->where('id_santri',$row->id_santri)->get('nama_lembaga');
                                                    foreach ($data_pondok as $row2) {
                                                        echo $row2->nama_lembaga."<br>";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $data_madrasah=DB::table('madrasah')->join('unit_lembaga', 'unit_lembaga.induk_lembaga', '=', 'madrasah.id_madrasah')->where('id_santri',$row->id_santri)->get('nama_lembaga');
                                                    foreach ($data_madrasah as $row2) {
                                                        echo $row2->nama_lembaga."<br>";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if($row->sub_kategori>0){
                                                            echo $row->kategori." - Kelas ".$row->sub_kategori;
                                                        }
                                                        else{
                                                            if($row->id_biaya==0){
                                                                echo "Belum memilih kategori";
                                                            }
                                                            else{
                                                                echo $row->kategori;
                                                            }
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="{{ route('profil_santri',['id_santri'=>$row->id_santri]) }}">
                                                        <button class="btn btn-primary">
                                                        Profil
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('edit_data',['id_santri'=>$row->id_santri]) }}">
                                                        <button class="btn btn-success">
                                                        Ubah
                                                        </button>
                                                    </a>
                                                    <button class="btn btn-danger" onclick="deleteFunc({{$row->id_santri}})">
                                                        Hapus
                                                    </button>
                                                    <a href="{{ route('get_biaya2',['id_santri'=>$row->id_santri]) }}">
                                                        <button class="btn btn-warning">
                                                        Update Kategori
                                                        </button>
                                                    </a>
                                                </td>
                                             </tr>  
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
        {{-- </div>

    </div> --}}
@endsection