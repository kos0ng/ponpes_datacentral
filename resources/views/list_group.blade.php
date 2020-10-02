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
                                        <strong>List Data Santri</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                             <button type="button" class="btn btn-warning mr-3" data-toggle="modal" data-target="#importExcel" style="margin-bottom: 1%">
            IMPORT EXCEL
        </button>

        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 10%">
            <div class="modal-dialog" role="document">
                <form method="post" action="{{ route('import_excel') }}" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>Pilih file excel</label>
                            <div class="form-group">
                                <input type="file" name="file" required="required">
                            </div>
 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

                                        <table id="myTable" class="table table-striped" >  
                                           <thead>  
                                             <tr>  
                                               <th>Nomor Induk Lembaga</th>  
                                               <th>Nama Lembaga</th>  
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
                                                    <a href="{{ route('list_data',['id_lembaga'=>$row->induk_lembaga]) }}">
                                                        <button class="btn btn-primary">
                                                        Lihat
                                                        </button>
                                                    </a>
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
                    {{--     <div class="row">
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