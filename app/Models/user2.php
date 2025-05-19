<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user2 extends Model
{
    use HasFactory;
    protected $table = 'user2';
    protected $primarykey = 'kodemapel';
    protected $fillable = ['nama_mapel', 'nama_tugas', 'nilai'];
}
