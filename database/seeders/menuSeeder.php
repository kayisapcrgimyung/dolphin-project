<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $menu = [
            ['kodemapel'=>'01', 'nama_mapel'=>'indonesia', 'jumlah_tugas'=>'1'],
            ['kodemapel'=>'02', 'nama_mapel'=>'matematika', 'jumlah_tugas'=>'3'],
            ['kodemapel'=>'03', 'nama_mapel'=>'sejarah', 'jumlah_tugas'=>'0']
        ];
        DB::table('menu')->insert($menu);
    }
}
