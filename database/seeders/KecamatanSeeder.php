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
        Kecamatan::create(['nama_kecamatan' => 'Cimahi Selatan']);
        Kecamatan::create(['nama_kecamatan' => 'Cimahi Tengah']);
        Kecamatan::create(['nama_kecamatan' => 'Cimahi Utara']);
    }
}
