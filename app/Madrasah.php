<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Madrasah extends Model
{
    protected $table = "madrasah";
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_santri','id_madrasah'];
}
