<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Roby',
                'nim' => '240414015',
                'jurusan' => 'Teknik Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Cindy',
                'nim' => '240414016',
                'jurusan' => 'Administrasi Bisnis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ciby',
                'nim' => '240414017',
                'jurusan' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
