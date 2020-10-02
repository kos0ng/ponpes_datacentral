@extends('template')

@section('judul_halaman','Mass Update Jenis Santri')
     
@section('fitur_lain','active')

@section('konten')
     <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Mass Update Jenis Santri</strong> 
                                    </div>
                                    <div class="card-body card-block">

                                        <table id="myTable" class="table table-striped" >  
                                           <thead>  
                                             <tr>  
                                               <th>Nama Lembaga</th>  
                                               <th>Kategori</th>  
                                               <th>Kelas</th>
                                               <th>Action</th>
                                             </tr>  
                                           </thead>  
                                           <tbody>  
                                             @foreach($all as $row)
                                                <tr style="height: 20px">
                <td>{{ $row->nama_lembaga }}</label></td>
                <td>{{$row->kategori}}</td>
                <td>
                    @php
                        if($row->sub_kategori==0){
                            echo "-";
                        }
                        else{
                            echo $row->sub_kategori;
                        }
                    @endphp
                </td>
                <td>
                    <button class="btn btn-warning" onclick="updateSB({{$row->id_biaya.".".$row->id_lembaga}})">
                                                        Update Santri Baru
                                                    </button>
                                                    <button class="btn btn-danger" onclick="updateSL({{$row->id_biaya.".".$row->id_lembaga}})">
                                                        Update Santri Lama
                                                    </button>
                </td>
                                                </tr>
                                             @endforeach
                                           </tbody>
                                         </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection