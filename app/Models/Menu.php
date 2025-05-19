<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $primarykey = 'kodemapel';
    protected $fillable = ['nama_mapel', 'nama_tugas', 'nilai'];
}
