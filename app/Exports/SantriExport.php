<?php

namespace App\Exports;

use App\Santri;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SantriExport implements FromView
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
    	if($this->id_lembaga>50){
            $data =  Santri::join('madrasah','madrasah.id_santri','=','data_santri.id_santri')
            ->where(['id_madrasah' => $this->id_lembaga])
            ->get();
        }
        else{
            $data =  Santri::join('pondok','pondok.id_santri','=','data_santri.id_santri')
            ->where(['id_pondok' => $this->id_lembaga])
            ->get();
        }
        // $data = Santri::where('id_lembaga',$this->id_lembaga )->get();
        return view('export_view', [
            'data' => $data
        ]);
    }
}

