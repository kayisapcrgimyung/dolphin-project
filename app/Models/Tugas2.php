<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas2 extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    protected $primarykey = 'kodemapel';
    protected $fillable = ['nama_mapel', 'nama_tugas', 'tempo', 'pengerjaan'];
}
