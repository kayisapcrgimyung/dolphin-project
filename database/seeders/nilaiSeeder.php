<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $nilai = [
            ['kodemapel'=>'01', 'nama_mapel'=>'indonesia', 'nama_tugas'=>'Membuat_Cerpen', 'nilai' => '98'],
            ['kodemapel'=>'02', 'nama_mapel'=>'matematika', 'nama_tugas'=>'Bangun_Ruang', 'nilai' => '88'],
            ['kodemapel'=>'03', 'nama_mapel'=>'sejarah', 'nama_tugas'=>'Artikel', 'nilai' => '78']
        ];
        DB::table('nilai')->insert($nilai);
    }
}
