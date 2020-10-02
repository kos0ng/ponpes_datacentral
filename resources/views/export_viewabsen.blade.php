            <table id="myTable" class="table table-striped" >  
                                           <thead>  
                                             <tr>  
                                               <th>Nomor Identitas</th>  
                                               <th>Nama</th>  
                                               <th>Hadir</th>  
                                               <th>Izin</th>
                                               <th>Sakit</th>
                                               <th>Alpa</th>
                                             </tr>  
                                           </thead>  
                                           <tbody>  
                                             @foreach($data as $row)
                                             <tr>  
                                                <td>{{ $row->id_santri }}</td>
                                                <td>{{ $row->nama }}</td>
                                                <td>{{ $row->hadir }}</td>
                                                <td>{{ $row->izin }}</td>
                                                <td>{{ $row->sakit }}</td>
                                                <td>{{ $row->alpa }}</td>
                                             </tr>  
                                             @endforeach
                                           </tbody>  
                                         </table>  