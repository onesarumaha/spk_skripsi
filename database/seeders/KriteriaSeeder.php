<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kriteria')->truncate();

        DB::table('kriteria')->insert([
            [
                'kode' => 'C1',
                'nama' => 'Kedisiplinan',
                'bobot' => 25,
                'tipe' => 'benefit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'C2',
                'nama' => 'Kehadiran',
                'bobot' => 20,
                'tipe' => 'benefit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'C3',
                'nama' => 'Kompetensi',
                'bobot' => 30,
                'tipe' => 'benefit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'C4',
                'nama' => 'Kerjasama',
                'bobot' => 15,
                'tipe' => 'benefit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'C5',
                'nama' => 'Pelanggaran',
                'bobot' => 10,
                'tipe' => 'cost',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}