<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class riwayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $riwayat = [
            ['kodemapel'=>'01', 'nama_tugas'=>'membuat_video', 'nama_mapel'=>'bahasa_indonesia', 'tgl_selesai'=>'01-12-2025'],
            ['kodemapel'=>'02', 'nama_tugas'=>'bangun_ruang', 'nama_mapel'=>'matematika', 'tgl_selesai'=>'07-07-2025'],
            ['kodemapel'=>'03', 'nama_tugas'=>'poster', 'nama_mapel'=>'sejarah','tgl_selesai'=>'06-04-2025']
        ];
        DB::table('riwayat')->insert($riwayat);
    }
}
