<?php

namespace Database\Seeders;

use App\Models\Kelurahan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed kelurahan
        Kelurahan::create(['nama_kelurahan' => 'CIBEBER']);
        Kelurahan::create(['nama_kelurahan' => 'CIBEUREUM']);
        Kelurahan::create(['nama_kelurahan' => 'LEUWIGAJAH']);
        Kelurahan::create(['nama_kelurahan' => 'MELONG']);
        Kelurahan::create(['nama_kelurahan' => 'UTAMA']);
        Kelurahan::create(['nama_kelurahan' => 'BAROS']);
        Kelurahan::create(['nama_kelurahan' => 'CIGUGUR TENGAH']);
        Kelurahan::create(['nama_kelurahan' => 'CIMAHI']);
        Kelurahan::create(['nama_kelurahan' => 'KARANGMEKAR']);
        Kelurahan::create(['nama_kelurahan' => 'PADASUKA']);
        Kelurahan::create(['nama_kelurahan' => 'SETIAMANAH']);
        Kelurahan::create(['nama_kelurahan' => 'CIBABAT']);
        Kelurahan::create(['nama_kelurahan' => 'CIPAGERAN']);
        Kelurahan::create(['nama_kelurahan' => 'CITEUREUP']);
        Kelurahan::create(['nama_kelurahan' => 'PASIRKALIKI']);
    }
}
