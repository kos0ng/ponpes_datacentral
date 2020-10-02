<?php

namespace App\Imports;

use App\Santri;
use App\Pondok;
use App\Madrasah;
// use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

// class SantriImport implements ToModel
class SantriImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            $pondok=explode(",",$row[13]);
            $madrasah=explode(",",$row[14]);
            $id_santri=Santri::insertGetId([
                'nama' => $row[0],
                'nik' => $row[1],
                'tempat_lahir' => $row[2],
                'tgl_lahir' => $row[3],
                'jenis_kelamin'=> $row[4],
                'alamat'=> $row[5],
                'tgl_masuk'=> $row[6],
                'tgl_keluar'=> $row[7],
                'nama_ayah'=> $row[8],
                'alamat_ayah'=> $row[9],
                'nama_ibu'=> $row[10],
                'alamat_ibu'=> $row[11],
                'telp_1'=> $row[12],
            ]);
            foreach ($pondok as $x => $row2) {
                if($row2!=''){
                    Pondok::insert([
                        'id_pondok' => $row2,
                        'id_santri' => $id_santri
                    ]); 
                }
            }
            foreach ($madrasah as $x => $row2) {
                if($row2!=''){
                    Madrasah::insert([
                        'id_madrasah' => $row2,
                        'id_santri' => $id_santri
                    ]); 
                }
            }
        }
    }
}
