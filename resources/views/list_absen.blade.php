@extends('template')

@section('judul_halaman','List Data')
     
@section('data_absen','active')

@section('konten')
     <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>List Absensi Santri {{ $nama_lembaga[0]->nama_lembaga }}</strong> 
                                    </div>
                                    <div class="card-body card-block">                                        
                                        <h4>Hari Efektif : {{$hari_efektif[0]->hari_efektif}} hari</h4>
                                        <a href="{{ route('export_absen',['id_lembaga'=>$id_lembaga]) }}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                                        <button class="btn btn-danger" onclick="resetAbsen({{$id_lembaga}})">
                                                        Reset Absen
                                                    </button>
                                        <table id="myTable" class="table table-striped" >  
                                           <thead>  
                                             <tr>  
                                               <th>Nomor Identitas</th>  
                                               <th>Nama</th>  
                                               <th>Hadir</th>  
                                               <th>Izin</th>
                                               <th>Sakit</th>
                                               <th>Alpa</th>
                                               <th>Action</th>
                                             </tr>  
                                           </thead>  
                                           <tbody>  
                                             @foreach($all as $row)
                                             <tr>  
                                                <td>{{ $row->id_santri }}</td>
                                                <td>{{ $row->nama }}</td>
                                                <td>{{ $row->hadir }}</td>
                                                <td>{{ $row->izin }}</td>
                                                <td>{{ $row->sakit }}</td>
                                                <td>{{ $row->alpa }}</td>
                                                <td>
                                                    <a href="{{ route('edit_absen',['id_absen'=>$row->id_absen]) }}">
                                                        <button class="btn btn-success">
                                                        Ubah
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
        </div>

    </div>
@endsection