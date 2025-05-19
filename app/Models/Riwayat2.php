<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat2 extends Model
{
    use HasFactory;
    protected $table = 'Riwayat2';
    protected $primarykey = 'kodemapel';
    protected $fillable = ['nama_tugas', 'nama_mapel', 'tgl_selesai'];
}
