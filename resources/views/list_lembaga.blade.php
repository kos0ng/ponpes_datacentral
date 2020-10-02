@extends('template')

@section('judul_halaman','List Data')
     
@section('data_lembaga','active')

@section('konten')
     <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>List Data Lembaga</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <table id="myTable" class="table table-striped" >  
                                           <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahLembaga" style="margin-bottom: 1%">
            Tambah Lembaga
        </button>

        <div class="modal fade" id="tambahLembaga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 10%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/data_santri/insert_lembaga">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Lembaga</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>Nama Lembaga</label>
                            <div class="form-group">
                                <input type="text" name="nama_lembaga" class="form-control" required placeholder="Nama Lembaga">
                            </div>
                            <label>Hari Efektif</label>
                            <div class="form-group">
                                <input type="number" name="hari_efektif" class="form-control" required placeholder="Hari Efektif">
                            </div>
                            <label>Jenis Lembaga</label>
                            <div class="form-group">
                                <select class="form-control" name="jenis_lembaga">
                                    <option value="1">Pondok</option>
                                    <option value="5">Madrasah</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
                                           <thead>  
                                             <tr>  
                                               <th>Nomor Induk Lembaga</th>  
                                               <th>Nama Lembaga</th>  
                                               <th>Hari Efektif</th>  
                                               <th>Action</th>
                                             </tr>  
                                           </thead>  
                                           <tbody>  
                                             @foreach($all as $row)
                                             @php
                                                        if($row->induk_lembaga!=10 && $row->induk_lembaga!=50){
                                            @endphp
                                             <tr>  
                                                <td>{{ $row->induk_lembaga }}</td>
                                                <td>
                                                    {{ $row->nama_lembaga }}
                                                </td>
                                                <td>
                                                    {{ $row->hari_efektif }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('edit_lembaga',['id_lembaga'=>$row->induk_lembaga]) }}">
                                                        <button class="btn btn-warning">
                                                        Edit
                                                        </button>
                                                    </a>
                                                    <button class="btn btn-danger" onclick="deleteLbg({{$row->induk_lembaga}})">
                                                        Hapus
                                                    </button>
                                                </td>
                                             </tr>  
                                             @php
                                         }
                                                    @endphp
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