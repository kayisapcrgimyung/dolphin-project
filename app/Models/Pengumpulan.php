<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumpulan extends Model
{
    use HasFactory;
    protected $table = 'Pengumpulan';
    protected $fillable = ['nama', 'mapel', 'nama_tugas', 'file_tugas'];
}
