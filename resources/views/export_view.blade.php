            <table id="myTable" class="table table-striped" >  
                                           <thead>  
                                             <tr>  
                                               <th>NIPS</th>  
                                               <th>Nama</th>  
                                               <th>NIK</th>  
                                               <th>Tempat Lahir</th>  
                                               <th>Tanggal Lahir</th>  
                                               <th>Jenis Kelamin</th>
                                               <th>Alamat</th>
                                               <th>Tanggal Masuk</th>
                                               <th>Tanggal Keluar</th>
                                               <th>Nama Ayah</th>
                                               <th>Alamat Ayah</th>
                                               <th>Nama Ibu</th>
                                               <th>Alamat Ibu</th>
                                               <th>No HP</th>
                                               <th>Pondok</th>
                                               <th>Madrasah</th>
                                             </tr>  
                                           </thead>  
                                           <tbody>  
                                             @foreach($data as $row)
                                             <tr>  
                                                <td>{{ $row->id_santri }}</td>
                                                <td>{{ $row->nama }}</td>
                                                <td>{{ $row->nik }}</td>
                                                <td>{{ $row->tempat_lahir }}</td>
                                                <td>{{ $row->tgl_lahir }}</td>
                                                <td>{{ $row->jenis_kelamin }}</td>
                                                <td>{{ $row->alamat }}</td>
                                                <td>{{ $row->tgl_masuk }}</td>
                                                <td>{{ $row->tgl_keluar }}</td>
                                                <td>{{ $row->nama_ayah }}</td>
                                                <td>{{ $row->alamat_ayah }}</td>
                                                <td>{{ $row->nama_ibu }}</td>
                                                <td>{{ $row->alamat_ibu }}</td>
                                                <td>{{ $row->telp_1 }}</td>
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
                                             </tr>  
                                             @endforeach
                                           </tbody>  
                                         </table>  