<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
	protected $table = "absen";
    protected $primaryKey = 'id';
    protected $fillable = ['id_absen','id_santri','id_lembaga','hadir','izin','sakit','alpa'];
}
