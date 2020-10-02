<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Santri extends Model
{
    protected $table = "data_santri";
    protected $primaryKey = 'id_santri';
    protected $fillable = ['id_santri','nama','nik','tempat_lahir','tgl_lahir','jenis_kelamin','alamat','tgl_masuk','tgl_keluar','nama_ayah','alamat_ayah','nama_ibu','alamat_ibu','telp_1'];
}