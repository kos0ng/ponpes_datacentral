@extends('template')

@section('judul_halaman','Tambah Data')
     
@section('data_user','active')


@section('konten')
     <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>List Data Admin</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                             <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#addUser" style="margin-bottom: 1%">
            Tambah Admin
        </button>

        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 10%">
            <div class="modal-dialog" role="document">
                <form method="post" action="{{ route('add_user') }}" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama" placeholder="Nama Admin" class="form-control">
                                                </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="text-input" name="email" placeholder="Email Admin" class="form-control">
                                                </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="text-input" name="password" placeholder="Password Admin" class="form-control">
                                                </div>
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

                                        <table id="myTable" class="table table-striped" >  
                                           <thead>  
                                             <tr>  
                                               <th>ID</th>  
                                               <th>Email</th>  
                                               <th>Nama</th>
                                               <th>Action</th>
                                             </tr>  
                                           </thead>  
                                           <tbody>  
                                             @foreach($all as $row)
                                             <tr>  
                                                <td>{{ $row->id }}</td>
                                                <td>
                                                    {{ $row->email }}
                                                </td>
                                                <td>
                                                    {{ $row->name }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('edit_user',['id'=>$row->id]) }}">
                                                        <button class="btn btn-warning">
                                                        Ubah
                                                        </button>
                                                    </a>
                                                    <button class="btn btn-danger" onclick="deleteUser({{$row->id}})">
                                                        Hapus
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
