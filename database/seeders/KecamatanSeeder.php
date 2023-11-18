<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed kecamatan
        Kecamatan::create(['nama_kecamatan' => 'CIMAHI SELATAN']);
        Kecamatan::create(['nama_kecamatan' => 'CIMAHI TENGAH']);
        Kecamatan::create(['nama_kecamatan' => 'CIMAHI UTARA']);
    }
}
