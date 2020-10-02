<?php

namespace App\Exports;

use App\Absen;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AbsenExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;

 	function __construct($id_lembaga) {
        $this->id_lembaga = $id_lembaga;
 	}

    public function view(): View
    {
            $data =  Absen::join('data_santri','data_santri.id_santri','=','absen.id_santri')
            ->where(['id_lembaga' => $this->id_lembaga])
            ->get();
        // $data = Santri::where('id_lembaga',$this->id_lembaga )->get();
        return view('export_viewabsen', [
            'data' => $data
        ]);
    }
}
