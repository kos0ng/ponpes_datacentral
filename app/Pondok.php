<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pondok extends Model
{
	protected $table = "pondok";
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_santri','id_pondok'];
}
