@extends('template')

@section('judul_halaman','Mass Update Kategori Santri')
     
@section('fitur_lain','active')

@section('konten')
     <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Mass Update Kategori Santri</strong> 
                                    </div>
                                    <div class="card-body card-block">

                                        <table id="myTable" class="table table-striped" >  
                                           <thead>  
                                             <tr>  
                                               <th>Nama Lembaga</th>  
                                               <th>Kategori</th>  
                                               <th>Kelas</th>
                                               <th style="text-align: center;">Action</th>
                                             </tr>  
                                           </thead>  
                                           <tbody>  
                                             @foreach($all as $row)
                                                <tr style="height: 20px">
                <td>{{ $row->nama_lembaga }}</td>
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
                        <form method="POST" action="{{route('insert_kat')}}">
                            {{ csrf_field() }}
                        <input type="hidden" name="id_biaya" value="{{$row->id_biaya}}">
                        <input type="hidden" name="id_lembaga" value="{{$row->id_lembaga}}">
                        <label style="float: left;">Dari</label> <input type="number" name="from" class='form-control' style="width: 30%;float: left;margin-left: 5%">
                        <label style="float: left;margin-left: 5%">Sampai</label> <input type="number" name="to" class="form-control" style="width: 30%;float: left;margin-left: 5%">
                        <input type="submit" name="submit" class="btn btn-success" value="Update">
                        </form>
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