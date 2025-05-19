<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $primarykey = 'nip';
    protected $fillable = ['nip','nama_guru', 'mata_pelajaran', 'email', 'no_hp'];
}
