<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;
    protected $table = 'riwayat';
    protected $primarykey = 'kodemapel';
    protected $fillable = ['nama_tugas', 'nama_mapel', 'tgl_selesai'];
}
